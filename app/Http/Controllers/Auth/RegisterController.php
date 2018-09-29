<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'contactno' => 'required',
            'address' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
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
    
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'terms' => $data['terms'],
            'contactno' => $data['contactno'],
            'address' => $data['address'],

        ]);
    }
}
