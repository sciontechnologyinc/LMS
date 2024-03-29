<?php

namespace App\Http\Controllers;

use App\Book;
use App\Bookissue;
use App\Category;
use App\Generalsettings;
use App\Member;
use App\Subject;
use App\Department;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;
use DB;
use Image;
use Storage;
use Purifier;


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
    public function member()
    {
	    $members = Member::orderBy('id')->get();
        return view('members.edit', ['members' => $members]);
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

        $request->merge([ 
            'subject' => implode(', ', (array) $request->get('subject'))
        ]);

        $member = $request->all();
        $data = $request->validate([
            'membername' => 'required',
            'gender' => 'required',
            'contactnumber' => 'required|max:11',
            'email' => 'required|unique:members||email',
            'LRN' => 'required|unique:members|',
            'profession' => 'required',
            'department' => '',
            'subject' => '',
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
            $fileNameToStore = 'user_icon.png';
        }

        
        $member = new Member;
        $member->membername = $request->input('membername');
        $member->gender = $request->input('gender');
        $member->contactnumber = $request->input('contactnumber');  
        $member->email = $request->input('email');
        $member->LRN = $request->input('LRN');
        $member->profession = $request->input('profession');
        $member->department = $request->input('department');
        $member->subject = implode(', ', (array) $request->get('subject'));
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
        $subjects = Subject::find($id);
        $deparments = Department::find($id);
        $departments = DB::table('departments')->get();
        $subjects = DB::table('subjects')->get();

 
        return view('members/edit', ['member' => $member,'subjects' => $subjects, 'departments' => $departments]);
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
        
        $member = $request->all();
        $data = $request->validate([
            'membername' => 'required',
            'gender' => 'required',
            'contactnumber' => 'required',
            'email' => 'required|email|unique:users',
            'LRN' => '',
            'profession' => 'required',
            'department' => '',
            'subject' => '',
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
                $fileNameToStore = 'user_icon.png';
            }


          
            $member = Member::find($id);
            $member->membername = $request->input('membername');
            $member->gender = $request->input('gender');
            $member->contactnumber = $request->input('contactnumber');  
            $member->email = $request->input('email');
            $member->LRN = $request->input('LRN');
            $member->profession = $request->input('profession');
            $member->department = $request->input('department');
            $member->subject = implode(', ', (array) $request->get('subject'));
            $member->livingaddress = $request->input('livingaddress');
            $member->photo = $fileNameToStore;
            $member->save();
        

            return redirect('/members')->with('success','Updated successfuly');
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

	    Session::flash('success', ' Deleted successfully');
	    return redirect('/members');
    }
}
