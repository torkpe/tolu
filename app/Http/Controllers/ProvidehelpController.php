<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\providehelp;
use App\gethelp;
use App\Cph;
use App\Cgh;
use \Auth;


class ProvidehelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('providehelp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $user_id= \Auth::user()->id;
         $account = providehelp::all()
        ->where('ph_user_id', $user_id);
        if (count($account) >= 1){

       }else{
        $providehelp = new providehelp;
        $providehelp->name = \Auth::user()->name;
        $providehelp->gh_user_id = "unkonwn";
        $providehelp->ph_user_id = \Auth::user()->id;
        $providehelp->ph_type = "unknown";
        $providehelp->verified = "no";
        $providehelp->save();

        
        }
        return view('providehelp');
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
        $ph_type= $id;
        $user_id= \Auth::user()->id;
        $account = gethelp::orderBy('id', 'desc')
        ->where("gh_type", $ph_type)
        ->where(function($query){
            $query->where("confirm", "yes");
        })
        ->get();
        $user_id= \Auth::user()->id;

        foreach ($account as $account) {
        $name=$account->accountname;
        $user_id=$account->user_id;

        $account = Cgh::orderBy('id')
        ->where('gh', $user_id)
        ->get();

        if (count($account) >= 2){
        
        }else{
        
        $ph_user_id = \Auth::user()->id;
        $providehelp = providehelp::find($ph_user_id);
        $providehelp->gh_user_id = $user_id;
        $providehelp->ph_user_id = \Auth::user()->id;
        $providehelp->ph_type = $id;
        $providehelp->verified = "no";
        $providehelp->save();

        
        

        
    }
}
    return redirect('home');
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
