<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bankaccount;
use \Auth;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
       if (count($account)>0){
        return view('bankaccountadd', compact('account'));
    }
    else{
     return view('bankaccount', compact('account'));   
    }
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
       if (count($account)>0){
        return view('bankdetails', compact('account'));
    }
    else{
     return view('bankdetail',compact('account'));   
    }
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bankaccount = new bankaccount;
        $bankaccount->accountname = $request->accountname;
        $bankaccount->accountnumber = $request->accountnumber;
        $bankaccount->accounttype = $request->accounttype;
        $bankaccount->bank = $request->bank;
        $bankaccount->user_id = \Auth::user()->id;
        $bankaccount->phonenumber = $request->phonenumber;
        $bankaccount->save();

        $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
        return view('bankdetails', compact('account'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
        return view('bankdetails', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
       if (count($account)>0){
        return view('bankaccountadd', compact('account'));
    }
    else{
     return view('bankaccount', compact('account'));   
    }
    
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
        $bankaccount = bankaccount::find($id);
        $bankaccount->accountname = $request->accountname;
        $bankaccount->accountnumber = $request->accountnumber;
        $bankaccount->accounttype = $request->accounttype;
        $bankaccount->bank = $request->bank;
        $bankaccount->user_id = \Auth::user()->id;
        $bankaccount->phonenumber = $request->phonenumber;
        $bankaccount->save();

        $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
        return view('bankdetails', compact('account'));

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
