@extends('layouts.app')

@section('content')
 @if (Auth::user()->verified =='no' )
 <div style="color:red;"><center><strong>You have not verified your account yet. Please log in to your mail to verify as you cannot provide or get help without account verification</strong></center></div>
 @endif
 
        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-3">
                        <div class="img-circular text-center"><img src="https://www.unitydonations.com/img/avatars/female4.png"></div>
                        </div>
                        <div class="col-md-5 text-center"><div id="user"><h1> {{ Auth::user()->name }}</h1>
                            Welcome to MaxiCash {{ Auth::user()->name }}, A member donation system which aims to eliminate extreme wealth and poverty by mutual donation among members
                     <br/>   
                     @if ($count1==2)
                     <form action="/home/{{ Auth::user()->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                      <button class="btn btn-primary">Recycle Account</button>
                      </form>
                     @else
                     <form action="providehelp" method="POST">
                     {{ csrf_field() }}

                     @if ($count2 < 1)
                     <button class="btn btn-success">Provide Help</button></form>

                     @else
                     @endif
                     @endif
                     <form action="gethelp" method="POST">
                      
                     {{ csrf_field() }}
                     <button class="btn btn-success">Get Help</button></form></div>  
                </div>
                <div class="col-md-4 text-center"><h1>Recent Upline</h1>
                    
                    @foreach ($ph as $ph)
                     <form action="upline/{{ $ph->gh_user_id }}" method="get">
                     {{ csrf_field() }}
                     <button class="btn btn-primary">View Upline</button></form>
                      @endforeach
                    


                </div>
            </div>

        </div>
    </div></div>
   <div class="row">
<div class="col-md-4">
    <div class="panel panel-default">

        <div class="panel-body text-center">
<h2>Total Downlines:</h2>
        
        </div>
    </div>
</div>
    <div class="col-md-8">
    <div class="panel panel-default">
    <div class="panel-body ">
<h2><center>Cash Flow</center></h2><hr/>
<h3>Total Sent:</h3>
<hr/>
<h3>Total Received:</h3>
</div>
</div>
</div>

    

</div>

<div class="row">
<div class="col-md-4">
    <div class="panel panel-default">

        <div class="panel-body">

        <h2>Member Since:</h2>
        {{ Auth::user()->created_at->diffForHumans() }}
        </div>
    </div>
</div>
    <div class="col-md-8">
    <div class="panel panel-default">
    <div class="panel-body">
<h2><center>Details</center></h2><hr/>
<h3>Phone Number: @foreach ($account as $account)
                   
                    {{ $account->phonenumber }}
                    </h3>
<hr/>
<h3>Email: {{ Auth::user()->email }}</h3>
<hr/>
<h3>Account Number: {{ $account->accountnumber }}
                    @endforeach</h3>
</div>
</div>
</div>


<!--ending of initial div-->
</div>




    
@endsection
