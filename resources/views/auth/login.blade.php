@extends('layouts.login')

@section('style')
    <link href="{{ asset('backend/css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>{{ __('Login') }}</h1>
                    <div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input type="password"  placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="submit-block">
                        <button type="submit" class="btn btn-default submit">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                            <a class="reset_pass" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> {{ config('app.name', 'Laravel') }}</h1>
                            <p>©<?php echo date('Y'); ?> All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
@endsection
