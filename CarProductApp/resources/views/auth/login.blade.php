@extends('layouts.app')

@section('content')
<div class="container">
    {{"eslam"}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-log">
                <div class=""><h3>
                    {{ __('Login') }}

                </h3>
                </div>

                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class=""><h2>{{ __('Email Address') }}</h2></label>

                            <div class="">
                                <input id="email" type="email" class="sign_up_controle @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><h3>{{ $message }}</h3></strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><h3>{{ __('Password') }}</h3></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="sign_up_controle @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><h3>{{ $message }}</h3></strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn icon">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <div class="">

                                    <a class="btn icon" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
