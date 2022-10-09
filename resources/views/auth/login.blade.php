@extends('layouts.frontendApp')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title ?? "" }} {{ __('Login') }}</div>

                <div class="card-body">
                    @isset($route)
                        <form method="POST" action="{{ $route }}">
                    @else
                        <form method="POST" action="{{ route('login') }}">
                    @endisset
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">{{ $title ?? "" }} {{ __('Sign-In') }} </h4>
                <div class="nk-block-des">
                    <p>Access the Dssm Lms panel using your email and passcode.</p>
                </div>
            </div>
        </div>

        @isset($route)
            <form method="POST" action="{{ $route }}">
        @else
            <form method="POST" action="{{ route('login') }}">
        @endisset
            @csrf

            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="default-01">Email</label>
                </div>
                <div class="form-control-wrap">

                    <input 
                        id="email" 
                        type="email" 
                        class="form-control form-control-lg @error('email') is-invalid @enderror" 
                        name="email"
                        value="{{ old('email') }}" 
                        placeholder="Email"
                        required 
                        autocomplete="email" 
                        autofocus
                    >
                                                        
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">

                <div class="form-label-group">
                    <label class="form-label" for="password">Passcode</label>
                    {{-- @if (Route::has('password.request'))
                        <a class="link link-primary link-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                </div>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>

                    <input 
                        id="password" 
                        type="password" 
                        class="form-control form-control-lg @error('password') is-invalid @enderror" 
                        name="password"
                        placeholder="Password"
                        required 
                        autocomplete="current-password"
                    >                                                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block"> {{ __('Sign in') }} </button>
            </div>
        </form>

        <div class="form-note-s2 text-center pt-4"> New on our platform? 


            <a href="/register">Create an account</a>
        </div>
    </div>
</div>
@endsection
