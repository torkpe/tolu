<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\bankaccount;
use \Auth;
use App\upline;
use App\providehelp;
use App\gethelp;
use App\Cph;
use App\Cgh;


class UplineController extends Controller
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
         
         $ph_id= upline::all()
         ->where('ph_user_id', $user_id);
         if (count($ph_id) >= 1){

         }else{

         $upline = new upline;
         $username= \Auth::user()->name;
         $ph_id= providehelp::all()
         ->where('ph_user_id', $user_id);
         foreach ($ph_id as $ph) {
           $gh_user_id= $ph->gh_user_id;
           $ph_type= $ph->ph_type;

        $upline->ph_user = $username;
        $upline->body = $request->body;

        if ($request->hasFile('image')){
            $request->file('image');
            $ext=$request->image->extension();
            $new = round(microtime(true)) . '.' .($ext);
            $request->image->storeAs('public',$new);
            $url=Storage::url($new);
            $upline->image=$url;
        }else{
            $upline->image="";
        }
        
        $upline->ph_user_id = $user_id;
        $upline->gh_user_id = $gh_user_id;
        $upline->ph_type = $ph->ph_type;
        $upline->confirm="no";
        $upline->save();

        //insert also to gethelp table
     
    }
}

    $user_id= \Auth::user()->id;
        $gh_id= gethelp::all()
         ->where('user_id', $user_id);
         if (count($gh_id) == 1){

         }else{

    $gethelp= new gethelp;
         
        $bankaccount= bankaccount::all()
        ->where('user_id', $user_id);
        foreach ($bankaccount as $bankaccount) {
            $ph_id= providehelp::all()
         ->where('ph_user_id', $user_id);
         foreach ($ph_id as $ph) {
           $gh_user_id= $ph->gh_user_id;
           $ph_type= $ph->ph_type;

            $gethelp->name= $bankaccount->accountname;
            $gethelp->accountnumber= $bankaccount->accountnumber;
            $gethelp->accounttype= $bankaccount->accounttype;
            $gethelp->user_id= $user_id;
            $gethelp->bankname= $bankaccount->bank;
            $gethelp->gh_type= $ph_type;
            $gethelp->confirm= "no";
            $gethelp->save();


        }
    }
    $ph_id= providehelp::all()
         ->where('ph_user_id', $user_id);
         foreach ($ph_id as $ph) {
           $gh_user_id= $ph->gh_user_id;
    $cph = new Cph;
    $cph->user_id=$user_id;
    $cph->ph=$user_id;
    $cph->gh=$gh_user_id;
    $cph->confirm="no";
    $cph->save();    

    $cph = new Cgh;
    $cph->user_id=$user_id;
    $cph->ph=$user_id;
    $cph->gh=$gh_user_id;
    $cph->confirm="no";
    $cph->save();
     }  
    }
     session()->flash('message','Request confirmation sent');
     return redirect('/upline/'.$gh_user_id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user_id = \Auth::user()->id;
        $gh_user_id= $id;
        $get_ph= bankaccount::all()
        ->where('user_id', $gh_user_id);
        
        $get_up= upline::all()
        ->where('ph_user_id', $user_id);
        $count=count($get_up);
        return view('uplineindex', compact('get_ph','get_up','count'));
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
