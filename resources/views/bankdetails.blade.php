@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 ">
        
        </div>
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"><span style= "font-weight:bold";>Your account details</span></div>
                <div class="panel-body">

                    @foreach ($account as $account)
                    
                   <span style= "font-weight:bold";>Name:</span> {{ $account->accountname }}<hr/>
                   <span style= "font-weight:bold";>Account Number:</span>  {{ $account->accountnumber }}<hr/>
                    <span style= "font-weight:bold";>Account Type:</span>  {{ $account->accounttype }}<hr/>
                    <span style= "font-weight:bold";>Phone Number:</span>  {{ $account->phonenumber }}<hr/>
                    @endforeach
                    <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
        </div>
        </div>
</div>
@endsection
