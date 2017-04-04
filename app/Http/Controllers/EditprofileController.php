<?php
namespace App;

namespace App\Http\Controllers;
use App\users as users;

use Illuminate\Http\Request;

class EditprofileController extends Controller
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
        $data = array(
            'users' => $users
            );
        return view('editprofile', $data);
    }
    public function edit()
    {   
        $user=users::all()
            ->where('id', 1)
            ->update(['name' => '']);
    }
}