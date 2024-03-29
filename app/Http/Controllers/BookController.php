<?php

namespace App\Http\Controllers;

use App\Book;
use App\Bookissue;
use App\Category;
use App\Generalsettings;
use App\Member;
use App\Section;
use App\Subject;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;
use DB;
use Image;
use Storage;
use Purifier;

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

    public function booksdropdown()
    {
	    $books = Book::orderBy('id')->get();
	    $bookissues = Bookissue::orderBy('id')->get();
        return view('bookissues.create', ['books' => $books, 'bookissues' => $bookissues]);
    }
 

    public function lms()
    {
        $books = Book::orderBy('id')->get();
        return view('lms.pages.home', ['books' => $books]);
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

        $request->merge([ 
            'categoryname' => implode(', ', (array) $request->get('categoryname'))
        ]);
    
       
     
        $book = $request->all();
        $data = $request->validate([
            'bookname' => 'required',
            'yearpublish' => 'required|',
            'publisher' => 'required|',
            'ISBN' => 'required|unique:books|',
            'booknumber' => 'required|numeric',
            'bookprice' => 'required|numeric',
            'writername' => 'required',
            'categoryname' => 'required',
            'section' => 'required',
            'booktype' => 'required',
            'bookcondition' => 'required',
            'details' => 'required',
            'digitalphoto' => 'image|nullable|max:1999'

            

            
        ],[
            'bookname.required' => ' The book name field is required.',
            'yearpublish.required' => ' The Year field is required.',
            'publisher.required' => ' The Year field is required.',
            'ISBN.required' => ' The ISBN field is required.',
            'booknumber.required' => ' The book number field is required.',
            'bookprice.required' => ' The book price field is required.',
            'writername.required' => ' The writer name field is required.',
            'categoryname.required' => ' The category  field is required.',
            'comments.required' => ' The comments  field is required.',
            'section.required' => ' The status  field is required.',
            'booktype.required' => ' The book type field is required.',
            'bookcondition.required' => ' The book condition field is required.',
            'details.required' => ' The details field is required.',

        ]);

        if($request->hasFile('digitalphoto')){
            
            $filenameWithExt = $request->file('digitalphoto')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('digitalphoto')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('digitalphoto')->storeAs('public/uploads', $fileNameToStore);
        }else{
            $fileNameToStore = 'book_icon.png';
        }

        
        $book = new Book;
        $book->bookname = $request->input('bookname');
        $book->yearpublish = $request->input('yearpublish');
        $book->publisher = $request->input('publisher');
        $book->ISBN = $request->input('ISBN');
        $book->booknumber = $request->input('booknumber');  
        $book->bookprice = $request->input('bookprice');
        $book->writername = $request->input('writername');
        $book->categoryname = implode(', ', (array) $request->get('categoryname'));
        $book->section = $request->input('section');
        $book->comments = $request->input('comments');
        $book->booktype = $request->input('booktype');
        $book->bookcondition = $request->input('bookcondition');
        $book->details = $request->input('details');
        $book->digitalphoto = $fileNameToStore;
        $book->save();
        

	
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
    public function edit($id, Request $request)
    {
        $book = Book::find($id);
        $categories = Category::find($id);
        $categories = DB::table('categories')->get();
        $sections = DB::table('sections')->get();
        
   
        
        return view('books/edit', ['book' => $book,'categories'=>$categories,'sections'=>$sections]);
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
        $book = $request->all();
        $data = $request->validate([
            'bookname' => 'required',
            'yearpublish' => 'required',
            'publisher' => 'required',
            'ISBN' => 'required',
            'booknumber' => 'required|numeric',
            'bookprice' => 'required|numeric',
            'writername' => 'required',
            'categoryname' => 'required',
            'section' => 'required',
            'comments' => 'required',
            'booktype' => 'required',
            'bookcondition' => 'required',
            'details' => 'required',
            'digitalphoto' => 'image|nullable|max:1999'
            
        ]);

        if($request->hasFile('digitalphoto')){
            
            $filenameWithExt = $request->file('digitalphoto')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('digitalphoto')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('digitalphoto')->storeAs('public/uploads', $fileNameToStore);
        }else{
            $fileNameToStore = 'book_icon.png';
        }

        
        $book = Book::find($id);
        $book->bookname = $request->input('bookname');
        $book->yearpublish = $request->input('yearpublish');
        $book->publisher = $request->input('publisher');
        $book->ISBN = $request->input('ISBN');
        $book->booknumber = $request->input('booknumber');  
        $book->bookprice = $request->input('bookprice');
        $book->writername = $request->input('writername');
        $book->categoryname = implode(', ', (array) $request->get('categoryname'));
        $book->section = $request->input('section');
        $book->comments = $request->input('comments');
        $book->booktype = $request->input('booktype');
        $book->bookcondition = $request->input('bookcondition');
        $book->details = $request->input('details');
        $book->digitalphoto = $fileNameToStore;
        $book->save();

	
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
	    $book->delete($id);

	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
