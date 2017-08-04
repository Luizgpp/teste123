@extends('main1')

@section('title','Login')
@section('content')

<!-- entry-header-area start -->
<div class="entry-header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="entry-header">
                    <h1 class="entry-title">Minha Conta</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- entry-header-area end -->
<!-- my-account-area start -->
<div class="my-account-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    <div class="form-fields ">
                        <h2>Login</h2>
                        <p>
                            <label for="email">Email <span class="required">*</span></label>
                            <input class="{{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus/>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </p>
                        <p>
                            <label for="password">Password <span class="required">*</span></label>
                            <input class="{{ $errors->has('password') ? ' has-error' : '' }}" type="password" name="password" required />
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </p>
                    </div>
                    <div class="form-action">
                        <p class="lost_password"><a href="{{ route('password.request') }}">Esqueceu sua Senha?</a></p>
                        <input type="submit" value="Login" />
                        <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>Lembrar-me </label>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form action="#">
                    <div class="form-fields">
                        <h2>Register</h2>
                        <p>
                            <label>Email address  <span class="required">*</span></label>
                            <input type="text" />
                        </p>
                        <p>
                            <label>Password <span class="required">*</span></label>
                            <input type="password" />
                        </p>
                    </div>
                    <div class="form-action">
                        <input type="submit" value="Register" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- my-account-area end -->

@endsection    


{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   --}}
