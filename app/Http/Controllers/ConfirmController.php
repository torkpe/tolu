<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Auth;
use App\upline;
use App\providehelp;
use App\gethelp;
use App\bankaccount;
use App\users;
use App\Cph;
use App\Cgh;
class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $user_id= Auth::user()->id;
        $upline = upline::all()
        ->where('gh_user_id', $user_id);


        return view('confirm', compact('upline'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $confirm = gethelp::find($id);
        $confirm->confirm = "yes";
        $confirm->save();
        
        $cph = Cph::find($id);
        $cph->confirm = "yes";
        $cph->save();        


        $upline = upline::find($id);
        $upline->confirm = "yes";
        $upline->save();
        return redirect('confirm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $providehelp = providehelp::find($id);
        $providehelp->delete();

        $gethelp = gethelp::find($id);
        $gethelp->delete();

        $upline = upline::find($id);
        $upline->delete();


        $bankaccount = bankaccount::find($id);
        $bankaccount->delete();

        $users = users::find($id);
        $users->delete();


        
    }
}