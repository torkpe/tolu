@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
        
        </div>
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><span style="font-weight:bold;"><center>Upline Details</center></span></div>
                <div class="panel-body">
                    <div class="row">
                        @foreach ($get_ph as $gh)
                <div class="col-md-3 ">
                    <label>Account Name:</label><br/>
                    {{ $gh->accountname }}
                </div>
                <div class="col-md-3 ">
                    <label>Account Number:</label><br/>
                    {{ $gh->accountnumber }}
                </div>
                <div class="col-md-3 ">
                    <label>Bank:</label><br/>
                    {{ $gh->bank }} ( {{ $gh->accounttype }})
                </div>
                <div class="col-md-3 ">
                    <label>Phone Number:</label><br/>
                    {{ $gh->phonenumber }}
                </div>
                        @endforeach
                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
        </div>
        </div>


</div>
<div class="container">
    <div class="row">
    
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading"><span style="font-weight:bold;"><center>Send proof of payment</center></span></div>
                <div class="panel-body">
            @if ($count ==1)
            <center><span style="color:green;">confirmation request sent successfully sent!!!</span></center>
            @else
        <form action="/upline" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
         <input id="accountname" type="text" class="form-control" name="body" required autofocus>
 <input type="file" name="image" ><br>
 @foreach ($get_up as $get_up)
 @if ( $get_up->image !=="" )
    <a href="{{$get_up->image}}">View Image</a> 
@else
@endif
 @endforeach
                        <br><button class="btn btn-primary">Send</button>







                    </form>
@endif

                
                    </div>
                </div>
            </div>
        </div>
        </div>

        
</div>
@endsection
