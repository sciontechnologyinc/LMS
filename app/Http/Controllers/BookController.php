<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Book;
use App\Bookissue;
use App\Category;
use App\Generalsettings;
use App\Member;
use App\User;
use Carbon\Carbon;
use DB;
use Session;
use function Psy\debug;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        
	    $books = Book::orderBy('id')->get();
        return view('books.index', ['books' => $books]);


        $books = DB::table('books')->count();
        return view('books.index', ['books' => $books]);
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('dept_name','asc')->get();


        return view('books.create')->with([
            'categories'  => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $book = $request->all();
        $data = $request->validate([
            'bookname' => 'required',
            'ISBN' => 'required',
            'booknumber' => 'required|numeric',
            'bookprice' => 'required|numeric',
            'writername' => 'required',
            'category' => 'required',
            'status' => 'required',
            'booktype' => 'required',
            'bookcondition' => 'required',
            'details' => 'required',
            

            
        ],[
            'bookname.required' => ' The book name field is required.',
            'ISBN.required' => ' The ISBN field is required.',
            'booknumber.required' => ' The book number field is required.',
            'bookprice.required' => ' The book price field is required.',
            'writername.required' => ' The writer name field is required.',
            'category.required' => ' The category  field is required.',
            'status.required' => ' The status  field is required.',
            'booktype.required' => ' The book type field is required.',
            'bookcondition.required' => ' The book condition field is required.',
            'details.required' => ' The details field is required.',

        ]);
	    Book::create($data);

	    Session::flash('success', $book['bookname'] . ' Added successfully');
        return redirect('/books')->with('success','Added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$book = Book::find($id);
        return view('books/edit', ['book' => $book]);
        

    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $data = $request->all();
        $book->update($data);

	    Session::flash('success', $book['bookname'] . ' Updated successfully');
        return redirect('/books')->with('success','Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $book = Book::find($id);
	    $book->destroy($id);

	    Session::flash('success1', $book['bookname'] . ' Deleted successfully');
	    return redirect()->back()->with('success1','Deleted successfuly');
    }
}
