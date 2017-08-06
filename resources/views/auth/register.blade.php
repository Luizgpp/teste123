@extends('main')

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
                <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                    <div class="form-fields">
                        <h2>Registrar</h2>
                        <p>
                            <label for="name">Nome<span class="required">*</span></label>
                            <input id="name" class="{{ $errors->has('name') ? ' has-error' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus/>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </p>
                        <p>
                            <label for="email">Email <span class="required">*</span></label>
                            <input class="{{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" value="{{ old('email') }}" required/>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </p>
                        <p>
                            <label for="password">Senha <span class="required">*</span></label>
                            <input class="{{ $errors->has('password') ? ' has-error' : '' }}" type="password" name="password" required/>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </p>
                        <p>
                            <label for="password-confirm">Confirmar Senha <span class="required">*</span></label>
                            <input class="{{ $errors->has('password-confirm') ? ' has-error' : '' }}" type="password" name="password_confirmation" required/>
                        </p>
                    </div>
                    <div class="form-action">
                        <p class="lost_password"><a href="{{ route('login') }}">Já possui cadastro?</a></p>
                        <input type="submit" value="Registrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- my-account-area end -->

@endsection