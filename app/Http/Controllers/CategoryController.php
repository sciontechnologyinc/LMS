<?php

namespace App\Http\Controllers;

use App\Book;
use App\Bookissue;
use App\Category;
use App\Generalsettings;
use App\Member;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
	    $categories = Category::orderBy('id')->get();
        return view('categories.index', ['categories' => $categories]);
    }

    public function categorycheckbox()
    {
	    $categories = Category::orderBy('id')->get();
        return view('books/create', ['categories' => $categories]);
    }

    public function categorycheckbox1()
    {
	    $categories = Category::orderBy('id')->get();
        return view('books/edit', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $category = $request->all();
         $data = $request->validate([
            'categoryname' => 'required|unique:categories|',

            
        ]);
        Category::create($data);

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
    	$category = Category::find($id);
        return view('categories/edit', ['category' => $category]);
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
        $category = Category::find($id);
        $data = $request->all();
        $category->update($data);

	    Session::flash('success', $category['categoryname'] . ' Updated successfully');
        return redirect('/categories')->with('success','Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $category = Category::find($id);
	    $category->destroy($id);
        // DB::table('categories')->truncate($category);

	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
