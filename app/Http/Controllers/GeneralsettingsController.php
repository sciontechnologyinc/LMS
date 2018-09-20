<?php

namespace App\Http\Controllers;
use App\Generalsettings;
use Illuminate\Http\Request;
use Input;
use Validator;
use Session;
use Redirect;
  
    

class GeneralsettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $generalsettings = Generalsettings::orderBy('id')->get();    

        return view('generalsettings/generalsettings', ['generalsettings' => $generalsettings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function insertFile()
    {

    }

    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {



            request()->validate([
            'systemname' => 'required',
            'systememail' => 'required',
            'systemcontactno' => 'required',
            'uploadsystemlogo' => 'image|nullable|max:1999',
            'uploadfavicon' => 'image|nullable|max:1999',
            'address' => 'required',
            'about' => 'required',
            'mission' => 'required',
            'vision' => 'required',
        ]);

        if($request->hasFile('uploadsystemlogo,')&&('uploadfavicons')){
            
            $filenameWithExt = $request->file('uploadsystemlogo')&&('uploadfavicon')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('uploadsystemlogo')&&('uploadfavicon')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('uploadsystemlogo')&&('uploadfavicon')->storeAs('public/upload', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $generalsettings = new Generalsettings;
        $generalsettings->systemname = $request->input('systemname');
        $generalsettings->systememail = $request->input('systememail');
        $generalsettings->systemcontactno = $request->input('systemcontactno');
        $generalsettings->uploadsystemlogo = $fileNameToStore;
        $generalsettings->uploadfavicon = $fileNameToStore;        
        $generalsettings->address = $request->input('address');
        $generalsettings->about = $request->input('about');
        $generalsettings->mission = $request->input('mission');
        $generalsettings->vision = $request->input('vision');
        $generalsettings->save();

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$generalsetting = Generalsettings::find($id);
        return view('generalsettings/generalsettings', ['generalsetting' => $generalsetting]);
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
        request()->validate([
            'systemname' => 'required',
            'systememail' => 'required',
            'systemcontactno' => 'required',
            'uploadsystemlogo' => 'image|nullable|max:1999',
            'uploadfavicon' => 'image|nullable|max:1999',
            'address' => 'required',
            'about' => 'required',
            'mission' => 'required',
            'vision' => 'required',
        ]);

        if($request->hasFile('uploadsystemlogo,')&&('uploadfavicons')){
            
            $filenameWithExt = $request->file('uploadsystemlogo')&&('uploadfavicon')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('uploadsystemlogo')&&('uploadfavicon')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('uploadsystemlogo')&&('uploadfavicon')->storeAs('public/upload', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $generalsettings = new Generalsettings;
        $generalsettings->systemname = $request->input('systemname');
        $generalsettings->systememail = $request->input('systememail');
        $generalsettings->systemcontactno = $request->input('systemcontactno');
        $generalsettings->uploadsystemlogo = $fileNameToStore;
        $generalsettings->uploadfavicon = $fileNameToStore;        
        $generalsettings->address = $request->input('address');
        $generalsettings->about = $request->input('about');
        $generalsettings->mission = $request->input('mission');
        $generalsettings->vision = $request->input('vision');
        $generalsettings->save();

        return redirect()->back()->with('success','Updated successfuly');
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
