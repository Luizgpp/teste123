@extends('main')

@section('title','Login')
@section('content')

<!-- my-account-area start -->
<div class="my-account-area entry-header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-3">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                    <div class="form-fields ">
                        <h2>Esqueci Minha Senha</h2>
                        <p>
                            <label for="email">Email <span class="required">*</span></label>
                            <input class="{{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus/>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </p>                        
                    </div>
                    <div class="form-action">
                        <input type="submit" value="Enviar Link para Email" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- my-account-area end -->

@endsection    

