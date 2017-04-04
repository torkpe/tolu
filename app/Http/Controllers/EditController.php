<?php
namespace App;

namespace App\Http\Controllers;
use App\users as users;

use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {   
        $users = users::all();
        $users->name = 'name';
        return view('editprofile');
    }
}
