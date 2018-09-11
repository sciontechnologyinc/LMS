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
	    $rfids = Rfid::orderBy('id')->get();
        return view('rfid.monitoring', ['rfids' => $rfids]);

    }

    public function rfidgetdata()
    {
        $rfids = Rfid::orderBy('id')->get();
	    $members = Member::orderBy('id')->where('membername', 'jetro')->get();
        return view('rfid.monitoring', ['rfids' => $rfids, 'members' => $members]);
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

    public function store(Request $request)
    {
       
        $rfid = $request->all();
        $data = $request->validate([
            'studentid' => 'required',
            'studentname' => 'required',
            'timein' => 'required',
            'timeout' => 'required',
            'status' => 'required',

        ]);

        $rfid = new Rfid;
        $rfid->studentid = $request->input('studentid');
        $rfid->studentname = $request->input('studentname');
        $rfid->timein = $request->input('timein');  
        $rfid->timeout = $request->input('timeout');
        $rfid->status = $request->input('status');
        $rfid->save();

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
