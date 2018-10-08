<?php

namespace App\Http\Controllers;
use App\Reservation;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HeaderController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNotif($notifyid)
    {
        $notifyId = Reservation::where("notification", $notifyid)->select('notification')->get();
        return response()->json(['success' => true, 'reservations' => $notifyId]);
    }

    public function updateNotif()
    {
         DB::table('reservations')
         ->update(['notification' => 0]);
        
    }

    public function getBooknumber($booknumberid)
    {
        $booknumberId = Book::where("booknumber","status", $booknumberid)->select('booknumber','status')->get();
        return response()->json(['success' => true, 'books' => $booknumberId]);
    }

    public function updateBooknumber()
    {
         
         DB::table('books')
         ->update(['booknumber'=> DB::raw('booknumber+1'),
                    'status'=> 'Good']);
                    
 
      
        
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
