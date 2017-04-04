@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 ">
        
        </div>
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"><center><span style= "font-weight:bold";>Select Provide Help option</span></center></div>
                <div class="panel-body">
                    <div class="col-md-4 text-center"><img src="" alt="img">
                    <label for="name" class="col-md-4 control-label"><span style= "color:gold";>Diamond</span></label>
                    </div>
                    <div class="col-md-4 text-center">One hundred thousand naira(100,000)</div>
                    <div class="col-md-4 text-center">
                    <form method="post" action="/providehelp/diamond" >
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <button class="btn btn-success">Provide Help</button></form>
                    </div>
                    <br><br><br>
                    <hr>
                    <div class="col-md-4 text-center"><img src="" alt="img">
                    <label for="name" class="col-md-4 control-label"><span style= "color:gold";>Platinum</span></label>
                    </div>
                    <div class="col-md-4 text-center">One hundred thousand naira(100,000)</div>
                    <div class="col-md-4 text-center">
                    <form method="post" action="/providehelp/platinum" >
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <button class="btn btn-success">Provide Help</button></form>
                    </div>
                    <br><br><br>
                    <hr>                    
                    <div class="col-md-4 text-center"><img src="" alt="img">
                    <label for="name" class="col-md-4 control-label"><span style= "color:gold";>Gold</span></label>
                    </div>
                    <div class="col-md-4 text-center">One hundred thousand naira(100,000)</div>
                    <div class="col-md-4 text-center">
                    <form method="post" action="/providehelp/gold" >
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <button class="btn btn-success">Provide Help</button></form>
                    </div>
                    <br><br><br>
                    <hr>                    
                    <div class="col-md-4 text-center"><img src="" alt="img">
                    <label for="name" class="col-md-4 control-label"><span style= "color:gold";>Silver</span></label>
                    </div>
                    <div class="col-md-4 text-center">One hundred thousand naira(100,000)</div>
                    <div class="col-md-4 text-center">
                    <form method="post" action="/providehelp/silver" >
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <button class="btn btn-success">Provide Help</button></form>
                    </div>
                    <br><br><br>
                    <hr>                    
                    <div class="col-md-4 text-center"><img src="" alt="img">
                    <label for="name" class="col-md-4 control-label"><span style= "color:gold";>Bronze</span></label>
                    </div>
                    <div class="col-md-4 text-center">One hundred thousand naira(100,000)</div>
                    <div class="col-md-4 text-center">
                    <form method="post" action="/providehelp/bronze" >
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <button class="btn btn-success">Provide Help</button></form>
                    </div>
                    <br><br><br>
                    <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
        </div>
        </div>
</div>
@endsection
