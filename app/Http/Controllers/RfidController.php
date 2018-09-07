<?php

namespace App\Http\Controllers;

use App\Rfid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Member;
use DB;

class RfidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function rfidgetdata()
    {
        $rfids = Rfid::orderBy('id')->where('studentid', 'JETRO')->get();
        return view('rfid.monitoring', ['rfids' => $rfids]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function rfid()
    {
        $rfids = Rfid::orderBy('id')->get();
        $member = DB::table('members')->where('LRN', '1234141412')->pluck('LRN');
        return view('rfid.monitoring', ['rfids' => $rfids,'member'=>$member]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $rfids = new Rfid();

        $rfids->studentid = $request->input('studentid');
        $rfids->studentname = $request->input('studentname');
        $rfids->timein = $request->input('timein');
        $rfids->timeout = $request->input('timeout');
        $rfids->status = $request->input('status');

        $rfids->save();

        return redirect()->back();
        
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
