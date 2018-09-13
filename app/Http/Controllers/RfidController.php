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

    public function rfidgetdata(Request $request)
    {
        $membername = $request->input('RFIDSAVE');
        $rfids = Rfid::orderBy('id')->get();
        $members = Member::orderBy('id')->where('membername', $membername)->get();
        return view('rfid.monitoring', ['rfids' => $rfids, 'members' => $members]);
        
    }

    public function members()
    {
       
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
    public function post(Request $request)
    {
        $response = array(
            'studentid' => $request->get('studentid'),
            'studentname' => $request->get('studentname'),
            'timestatus' => $request->get('timestatus'),
            'status' => $request->get('status'),
        );
        $rfids = Rfid::orderBy('id')->get();
        $rfid = new Rfid([
            'studentid' => $request->get('studentid'),
            'studentname' => $request->get('studentname'),
            'timestatus' => $request->get('timestatus'),
            'status' => $request->get('status'),
        ]);
        $rfid->save();
        return response()->json($response); 
     }
     public function getStudent($student)
     {
        $studentId = member::where("LRN", $student)->select('LRN','membername','timestatus')->get();
        return response()->json(['success' => true, 'members' => $studentId]);
    }
    
    public function updateStudent($studentid)
    {
        $rfids = Rfid::orderBy('id')->get();
        $student = member::where('LRN', $studentid)->update(request()->all());
        $student->save();
    }
    public function store(Request $request)
    {
        if(Request::ajax()){
            return var_dump(Response::json(Request::all()));
        }
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
