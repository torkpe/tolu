@extends('layouts.app')

@section('content')
@foreach ($upline as $upline)
<div class="container">
    <div class="row">
        <div class="">
        
        </div>
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><span style="font-weight:bold;"><center>Received Donations</center></span></div>
                <div class="panel-body">
                <div class="col-md-3">
                <label>Name:</label>
                {{  $upline->ph_user }}
                </div>                
                <div class="col-md-3">
                <label>Transaction Details</label><br/>
                <span style="font-weight:bold;">Detail: </span> {{ $upline->body }}<br/>
                <span style="font-weight:bold;">Photo proof: </span>@if ($upline->image !=="") <a href="{{ $upline->image }}">View Image</a>@else No photo proof @endif<br/>
                <span style="font-weight:bold;">Payment Type: </span>{{ $upline->ph_type }}
                </div>
                <div class="col-md-3">
                <label>Confirm</label><br/>
                @if ($upline->confirm=="yes")
                <span style="color:green;">Payment confirmed</span>
                @else
                <form method="post" action="/confirm/{{ $upline->ph_user_id }}">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}

                <button class="btn btn-success">Confirm</button>
                </form>
                @endif
                </div>
                <div class="col-md-3">
                <label>Delete</label><br/>
                @if ($upline->confirm=="yes")
                <span style="color:green;">Payment confirmed</span>
                @else
                <form action="/confirm/{{ $upline->ph_user_id }}" method="post">
                   {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button class="btn btn-danger">Delete</button>
                </form>
                @endif
                
                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
        </div>
        </div>
</div>
@endforeach
@endsection
