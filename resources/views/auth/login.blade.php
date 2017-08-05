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
            <div class="col-md-6 col-md-push-3">
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
                        <p class=""><a href="{{ route('password.request') }}">Esqueceu sua Senha?</a></p>
                        <p class="lost_password"><a href="{{ route('register') }}">Ainda não possui cadastro?</a></p>
                        <input type="submit" value="Login" />
                        <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>Lembrar-me </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- my-account-area end -->

@endsection    

