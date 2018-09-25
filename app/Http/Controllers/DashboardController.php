<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Bookissue;
use App\Category;
use App\Generalsettings;
use App\Member;
use App\Reservation;
use App\Subject;
use App\Department;
use App\User;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    /**
     *  Only authenticated users can access this controller
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Show Dashboard View
     *
     * @return View
     */
    public function index(){
        
        $t_books = Book::all()->count();
        $t_bookissues = Bookissue::all()->count();
        $t_reservations = Reservation::all()->count();
        $t_categories = Category::all()->count();
        $t_generalsettings = Generalsettings::all()->count();
        $t_members = Member::all()->count();
        $t_subjects = Subject::all()->count();
        $t_departments = Department::all()->count();
        $t_users = User::all()->count();


        return view('dashboard.index')
            ->with([
                't_books'                =>  $t_books,
                't_reservations'         =>  $t_reservations,
                't_bookissues'           =>  $t_bookissues,
                't_categories'           =>  $t_categories,
                't_generalsettings'      =>  $t_generalsettings,
                't_members'              =>  $t_members,
                't_subjects'             =>  $t_subjects,
                't_departments'           =>  $t_departments,
                't_users'                =>  $t_users,
  
            ]);
    }

    /**
     *  get the sub month of the given integer
     */
    private function getPrevDate($num){
        return Carbon::now()->subMonths($num)->toDateTimeString();
    }
}
