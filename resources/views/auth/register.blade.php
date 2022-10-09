@extends('layouts.frontendApp')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title ?? "" }} {{ __('Register') }}</div>

                <div class="card-body">
                     @isset($route)
                        <form method="POST" action="{{ $route }}">
                    @else
                        <form method="POST" action="{{ route('register') }}">
                    @endisset
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
                <h4 class="nk-block-title">{{ $title ?? "" }} {{ __('Register') }}</h4>
                <div class="nk-block-des">
                    <p>Create New DSSM LMS Account</p>
                </div>
            </div>
        </div>
        @isset($route)
            <form method="POST" action="{{ $route }}">
        @else
            <form method="POST" action="{{ route('register') }}">
        @endisset
            @csrf

            <div class="form-group">
                <label class="form-label" for="name">Name</label>
                <div class="form-control-wrap">
                    <input 
                        id="name" 
                        type="text" 
                        class="form-control form-control-lg @error('name') is-invalid @enderror" 
                        name="name" 
                        value="{{ old('name') }}" 
                        placeholder="Enter your name" 
                        required 
                        autocomplete="name" 
                        autofocus
                    >

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <div class="form-control-wrap">
                    <input 
                        id="email" 
                        type="email" 
                        class="form-control form-control-lg @error('email') is-invalid @enderror" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="email"
                        placeholder="Enter your email address"
                    >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
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
                        required 
                        autocomplete="new-password"
                        laceholder="Enter your password"
                    >
                                                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Confirm Password</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password-confirm">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input 
                        id="password-confirm" 
                        type="password" 
                        class="form-control form-control-lg" 
                        name="password_confirmation" 
                        required
                        autocomplete="new-password"
                        placeholder="Confirm password"
                    >                                          
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-control-xs custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox">
                    <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy
                            Policy</a> &amp; <a href="#"> Terms.</a></label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Register</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4"> Already have an account? <a
                href="/login"><strong>Sign in instead</strong></a>
        </div>
    </div>
</div>

@endsection
