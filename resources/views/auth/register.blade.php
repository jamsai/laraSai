@extends('layouts.app')
<link rel="stylesheet" href="css/appstyle.css">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading" align="center" style="font-weight: bold;">สมัครสมาชิกแจ่มใส</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name <font color="red">*</font></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Your Full Name / Shop Name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address <font color="red">*</font></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username <font color="red">*</font></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" placeholder="Your Log In ID" value="{{ old('username') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control" name="phonenumber" placeholder="08XXXXXXXX" value="{{ old('phonenumber') }}">

                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Account Type <font color="red">*</font></label>

                            <div class="col-md-6">

								<select required id="type" name="type">
										<option value="">--Select Type--</option>
										<option value="1">Member</option>
										<option value="2">Shopkeeper</option>
								</select>
                <small id="passwordHelpInline" class="text-muted">
                  <br>Member - สมาชิกสะสมแต้ม | Shopkeeper - สำหรับร้านค้า
                </small>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password <font color="red">*</font></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" placeholder="Password must be at least 8 characters" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password <font color="red">*</font></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm your password" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="action-button shadow animate green">
                                    <i class="fa fa-btn fa-user"></i> Register
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
