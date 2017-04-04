<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gethelp;
use App\bankaccount;

use \Auth;
class GethelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
                 $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
                 $user_id= \Auth::user()->id;
        
        foreach ($account as $account) {
        $name=$account->accountname;
        $accountnumber=$account->accountnumber;
        $accounttype=$account->accounttype;
        $bankname=$account->bank; # code...

        
        $ph_user_id = \Auth::user()->id;
        $providehelp = new gethelp;
        $providehelp->name = $name;
        $providehelp->accountnumber = $accountnumber;
        $providehelp->accounttype = $accounttype;
        $providehelp->user_id = $user_id;
        $providehelp->bankname = $bankname;
        $providehelp->gh_type = "bronze";
        $providehelp->confirm = "yes";
        $providehelp->save();
}
        return redirect('home');

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
        //
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
