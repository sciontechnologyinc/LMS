<?php

namespace App\Http\Controllers;

use App\Book;
use App\Bookissue;
use App\Category;
use App\Subject;
use App\Department;
use App\Generalsettings;
use App\Member;
use App\Section;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $subjects = Subject::orderBy('id')->get();
        return view('subjects.index', ['subjects' => $subjects]);
    }

    public function subjectcheckbox()
    {
        $subjects = Subject::orderBy('id')->get();
        $departments = Department::orderBy('id')->get();
        $sections = Section::orderBy('id')->get();
        return view('members/create', ['subjects' => $subjects,'departments' => $departments,'sections' => $sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $subject = $request->all();
         $data = $request->validate([
            'subjectname' => 'required|unique:subjects|',

            
        ]);
        Subject::create($data);

	    Session::flash('success', ' Added successfully');
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
    	$subject = Subject::find($id);
        return view('subjects/edit', ['subject' => $subject]);
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
        $subject = Subject::find($id);
        $data = $request->all();
        $subject->update($data);

	    Session::flash('success', $subject['subjectname'] . ' Updated successfully');
        return redirect('/subjects')->with('success','Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $subject = Subject::find($id);
	    $subject->destroy($id);

	    Session::flash('success', $subject['subjectname'] . ' Deleted successfully');
	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
