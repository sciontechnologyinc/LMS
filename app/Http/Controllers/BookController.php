<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Book;
use App\Category;
use DB;
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


        $data = $request->validate([
            'bookname' => 'required',
            'ISBN' => 'required',
            'booknumber' => 'required',
            'bookprice' => 'required',
            'writername' => 'required',
            'category' => 'required',
            'status' => 'required',
            'booktype' => 'required',
            'bookcondition' => 'required',
            'details' => 'required',

            
        ]);
	    Book::create($data);

	    Session::flash('success', $data['bookname'] . ' added successfully');
	    return redirect()->back()->with('success','Added successfuly');
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
    	// $book = Book::find($id);
        // return view('books/edit', ['book' => $book]);

        $categories  = Category::orderBy('categoryname','asc')->get();

        $book = Book::find($id);
        return view('books.edit')->with([
            'departments'  => $departments,
            'book'     => $book
        ]);
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

	    Session::flash('success', $book['bookname'] . ' updated successfully');
        return redirect()->back()->with('success','Added successfuly');
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

	    Session::flash('success', $book['bookname'] . ' deleted successfully');
	    return redirect()->back()->with('success','Added successfuly');
    }
}
