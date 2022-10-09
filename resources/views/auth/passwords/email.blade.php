@extends('layouts.frontendApp')

@section('content')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">{{ __('Reset Password') }}</h5>
                <div class="nk-block-des">
                    <p>{{ __('If you forgot your password, well, then we’ll email you instructions to reset your password.')}}</p>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="default-01">{{ __('Email Address') }}</label>
                </div>
                <div class="form-control-wrap">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Enter your email address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Send Password Reset Link') }}</button>
            </div>
        </form>
        {{-- <div class="form-note-s2 text-center pt-4">
            <a href="#"><strong>Return to login</strong></a>
        </div> --}}
    </div>
</div>
@endsection
