@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Details</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="bankaccount">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="accountname" class="col-md-4 control-label">Account Name</label>

                            <div class="col-md-6">
                                <input id="accountname" type="text" class="form-control" name="accountname" value="{{ old('accountname') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accountname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('accountnumber') ? ' has-error' : '' }}">
                            <label for="accountnumber" class="col-md-4 control-label">Account Number</label>

                            <div class="col-md-6">
                                <input id="accountnumber" type="accountnumber" class="form-control" name="accountnumber" value="{{ old('accountnumber') }}" required>

                                @if ($errors->has('accountnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accountnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('accounttype') ? ' has-error' : '' }}">
                            <label for="accounttype" class="col-md-4 control-label">Account Type</label>

                            <div class="col-md-6">
                                <input id="accounttype" type="accounttype" class="form-control" name="accounttype" required>

                                @if ($errors->has('accounttype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('bank') ? ' has-error' : '' }}">
                            <label for="bank" class="col-md-4 control-label">Bank</label>

                            <div class="col-md-6">
                                <input id="bank" type="bank" class="form-control" name="bank" required>
                                 @if ($errors->has('bank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            

                        <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="phonenumber" class="form-control" name="phonenumber" required>
                                @if ($errors->has('bank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
