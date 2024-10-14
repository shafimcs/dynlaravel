@extends('layouts.app')

@section('content')
    <center>
<div class="register-box" style="margin-top: -20px;">
    <div class="register-logo">
        <a href="../../index2.html"><b>Change Password</b></a>
    </div>
    @include('flash::message')
    <div class="register-box-body">
        <p class="login-box-msg"><b></b></p>

        <form action="{{ route('changepassword') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group has-feedback">

                <input id="email" type="email" name="email" class="form-control" placeholder="Email" value="{{ $user_email }}" >

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" name="old_password" class="form-control" placeholder="Old Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input id="password" type="password" name="new_password" class="form-control" placeholder="New Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>




            <div class="form-group has-feedback">
                <input id="password-confirm" type="password"  name="password_confirmation" class="form-control" name="password_confirmation"  placeholder="Retype password" required autofocus>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                </div>
                <!-- /.col -->
            </div>
        </form>



    </div>
    <!-- /.form-box -->
</div>
    </center>
@endsection