<?php

namespace App\Http\Controllers;
use App\Reservation;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::orderBy('id')->get();    
        return view('reservations.index', ['reservations' => $reservations]);
    }

    public function reservation()
    {
        $books = Book::orderBy('id')->get();    
        return view('reservations.create', ['books' => $books]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservations = $request->all();
        $data = $request->validate([
            'LRN' => 'required',
        ]);
        
        $reservations = new Reservation;
        $reservations->LRN = $request->input('LRN');
        $reservations->membername = $request->input('membername');    
        $reservations->bookname = $request->input('bookname');
        $reservations->message = $request->input('message');
        $reservations->save();

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
