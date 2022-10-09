@extends('layouts.frontendApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Reset password</h5>
                <div class="nk-block-des">
                    <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                </div>
            </div>
        </div>
        <form action="html/pages/auths/auth-login-v2.html">
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="default-01">Email</label>
                </div>
                <div class="form-control-wrap">
                    <input type="text" class="form-control form-control-lg" id="default-01"
                        placeholder="Enter your email address">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4">
            <a href="html/pages/auths/auth-login-v2.html"><strong>Return to login</strong></a>
        </div>
    </div>
</div> --}}
@endsection
