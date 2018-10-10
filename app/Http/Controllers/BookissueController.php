<?php

namespace App\Http\Controllers;

use App\Book;
use App\Bookissue;
use App\Category;
use App\Generalsettings;
use App\Member;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class BookissueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookissues = Bookissue::orderBy('id')->get();
        $books = Book::orderBy('id')->get();
        $admins = User::orderBy('id')->get();
        return view('bookissues.index', ['bookissues' => $bookissues, 'admins' => $admins,'books' => $books]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookissues.create');
    }
    public function saveisbn(Request $request)
    {
        $response = array(
            'booknumber' => $request->get('booknumber'),
        );
        $bookissue = Bookissue::orderBy('id')->get();
        $bookissue = new Bookissue([
            'bookname' => $request->get('bookname'),
            'ISBN' => $request->get('ISBN'),
            'booknumber' => $request->get('booknumber'),
            'bookprice' => $request->get('bookprice'),
            'writername' => $request->get('writername'),
            'comments' => $request->get('comments'),


        ]);
        
        $bookissue->save();
        return response()->json($response); 
        
     }
    public function getIsbn($isbn)
    {
        $isbnId = Book::where("ISBN", $isbn)->select('bookname','ISBN','booknumber','bookprice','writername','comments')->get();
        return response()->json(['success' => true, 'books' => $isbnId]);
    }

    public function updateIsbn($isbnid)
    {
        $bookissues = Bookissue::orderBy('id')->get();
        $book = Book::where('ISBN', $isbnid)->update(request()->all());
        $book->save();
        
    }

    public function getName($name)
    {
        $nameId = Member::where("LRN", $name)->select('membername')->get();
        return response()->json(['success' => true, 'members' => $nameId]);
    }
    
    public function updateName($nameid)
    {
        $bookissues = Bookissue::orderBy('id')->get();
        $member = Member::where('LRN', $nameid)->update(request()->all());
        $member->save();
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

         $bookissue = $request->all();
         $data = $request->validate([
            'bookname' => '',

            
        ]);
        $bookissue = new Bookissue;
        $bookissue->bookname = $request->input('bookname');
        $bookissue->name = $request->input('name');
        $bookissue->ISBN = $request->input('ISBN');
        $bookissue->booknumber = $request->input('booknumber');  
        $bookissue->bookprice = $request->input('bookprice');
        $bookissue->writername = $request->input('writername');
        $bookissue->comments = $request->input('comments');
        $bookissue->bookholder = $request->input('bookholder');
        $bookissue->date_from = $request->input('date_from');
        $bookissue->date_to = $request->input('date_to');
        $bookissue->hour_from = $request->input('hour_from');
        $bookissue->hour_to = $request->input('hour_to');
        $bookissue->difference = $request->input('difference');
        $bookissue->hours = $request->input('hours');
        $bookissue->save();

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
    	$bookissue = Bookissue::find($id);
        return view('bookissues/index', ['bookissue' => $bookissue]);
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
        $bookissue = Bookissue::find($id);
        $data = $request->all();
        $bookissue->update($data);

        return redirect('/bookissues');
   

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $bookissue = Bookissue::find($id);
	    $bookissue->destroy($id);

	    Session::flash('success', ' Deleted successfully');
	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
