<?php
namespace App;

namespace App\Http\Controllers;
use App\users as users;
use \Auth;
use App\upline;
use App\providehelp;
use App\gethelp;
use App\bankaccount;
use App\Cph;
use App\Cgh;

use Illuminate\Http\Request;


class HomeController extends Controller
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
            'users' => $users,
            'email' => $users
            );
                $user_id= \Auth::user()->id;
        $account = bankaccount::all()
        ->where('user_id', $user_id);
        $data = array(
            'accountname' => $account,
            'accountnumber' => $account,
            'accounttype' => $account,
            'bank' => $account,
            'phonenumber' => $account,
            );

        //second table
         $user_id= \Auth::user()->id;
         $ph = providehelp::all()
        ->where('ph_user_id', $user_id);

    $gh = Cgh::orderBy('id')
        ->where("gh", $user_id)
        
        ->get();
        
        $getcph = providehelp::orderBy('id')
        ->where("ph_user_id", $user_id)
        ->get();
        
        
           $count1= count($gh);
           $count2=count($getcph);
        return view('home', compact('account', 'data','ph','count1','count2'));
     }

    public function destroy($id)
    {   
        $providehelp = providehelp::find($id);
        if($providehelp){
                $providehelp->delete();
        }
        
        $gethelp = gethelp::find($id);
        if($gethelp){
            $gethelp->delete();
        }
        
        $cph = Cph::find($id);
        if($cph){
            $cph->delete();
        }
        
        $cgh = Cgh::find($id);
        if($cgh){
        $cgh->delete();
        }
        
        $upline = upline::find($id);
        if($upline){
        $upline->delete();
        }
        

        return redirect('home');

        
    }
}
