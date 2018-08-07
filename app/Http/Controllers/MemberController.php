<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $members = Member::orderBy('id')->get();
        return view('members.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
            'membername' => 'required',
            'gender' => 'required',
            'contactnumber' => 'required',
            'email' => 'required',
            'profession' => 'required',
            'department' => 'required',
            'subjects' => 'required',
            'livingaddress' => 'required',
            'photo' => 'image|nullable|max:1999'

            
        ]);

        if($request->hasFile('photo')){
            
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/uploads', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        
        $member = new Member;
        $member->membername = $request->input('membername');
        $member->gender = $request->input('gender');
        $member->contactnumber = $request->input('contactnumber');  
        $member->email = $request->input('email');
        $member->profession = $request->input('profession');
        $member->department = $request->input('department');
        $member->subjects = $request->input('subjects');
        $member->membername = $request->membername;
        $member->subjects = implode(',', $request->subjects);
        $member->livingaddress = $request->input('livingaddress');
        $member->photo = $fileNameToStore;
        $member->save();

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
    	$member = Member::find($id);
        return view('members/edit', ['member' => $member]);
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
        $member = Member::find($id);
        $data = $request->all();
        $member->update($data);

	    Session::flash('success', $member['membername'] . ' updated successfully');
        return redirect('/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $member = Member::find($id);
	    $member->destroy($id);

	    Session::flash('success', $member['membername'] . ' deleted successfully');
	    return redirect('/members');
    }
}
