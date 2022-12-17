@extends('layouts.app')

@section('title')
    <title>Login</title>
@endsection


@section('content')
    <!--=============================================
            =            breadcrumb area         =
            =============================================-->

    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Login - Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->

    <!--=============================================
         =            Login register page content         =
         =============================================-->

    <div class="page-content mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-8 offset-2 mb-30">
                    <!-- Login Form s-->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="login-form">
                            <a href="{{ route('login') }}" style="color: #80bb01;" class="login-title p-2 active">Login</a>
                            <a href="{{ route('register') }}" class="login-title p-2">Register</a>

                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input class="mb-0 @error('email') is-invalid @enderror" type="email" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email Address">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0 @error('password') is-invalid @enderror" type="password"
                                        placeholder="Password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-8">


                                </div>

                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>

                                <div class="col-md-12">
                                    <button class="register-button mt-0">Login</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Login register page content  ======-->
@endsection
