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
                     <br/>   <a href="#" class="btn btn-success" id="menu-toggle">Provide Help</a></div>  
                </div>
                <div class="col-md-4 text-center"><h1>Recent Upline</h1></div>
            </div>

        </div>
    </div></div>
   <div class="row">

    <div class="col-md-3">
    
</div>

<!--second row -->    

<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-body ">
        <form class="form-horizontal" role="form" method="POST" action="{{ ('editprofile') }}">
                        {{ csrf_field() }}
<label for="name" class="col-md-4 control-label">Full Name</label>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
</div>
</div>
</div>

<!--third row -->
<div class="col-md-3">
    
</div>



</div>


<!--ending of initial div-->
</div>
@endsection
