@extends('layouts.app')

@section('content')
<!--// Main Content \\-->
<div class="wm-main-content">

<!--// Main Section \\-->
<div class="wm-main-section">
    <div class="container">
        <div class="row">
            <div class="upload-form-center">
                <div class="col-md-6 text-center">
                    <div class="wm-search-course">
                        <h3 class="wm-short-title wm-color">{{ __('Login') }}</h3>
                        <p>Silahkan masukkan email dan password untuk login :</p>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4 text-center">
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
                        <p>Not a member yet? <a href="/register"> Register Now!!</a></p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!--// Main Section \\-->


</div>
<!--// Main Content \\-->
@endsection