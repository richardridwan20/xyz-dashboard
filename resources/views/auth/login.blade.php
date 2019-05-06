@extends('layouts.test')
@section('content')

    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="index.html">
                    <img class="content-header-logo" src="assets\media\photos\super-you-logo-full.png" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Welcome to Your Dashboard</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please sign in</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autocomplete="email">
                                    <label for="login-email">Email</label>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="password">
                                    <label for="login-password">Password</label>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                    <i class="si si-login mr-10"></i>  {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-sm-6 mb-5">
                                <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('register') }}">
                                    <i class="fa fa-plus text-muted mr-5"></i>{{ __('Register') }}
                                </a>
                            </div>
                            <div class="col-sm-6 mb-5">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('password.request') }}">
                                        <i class="fa fa-warning text-muted mr-5"></i>{{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Sign In Form -->
        </div>
    </div>
    <!-- END Page Content -->

@endsection
