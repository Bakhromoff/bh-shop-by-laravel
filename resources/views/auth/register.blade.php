    @extends('layouts.app')

    @section('title')
        <title>Register</title>
    @endsection

    @section('content')
        <!--=====  End of Header  ======-->

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
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-8 offset-2">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="login-form">
                                <a href="{{ route('login') }}" class="login-title p-2">Login</a>
                                <a href="{{ route('register') }}" style="color: #80bb01;"
                                    class="login-title p-2 active">Register</a>

                                <div class="row">
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">First Name</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="First Name" value="{{ old('name') }}" required
                                            autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="lastname">Last Name</label>
                                        <input id="lastname" type="text"
                                            class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                            placeholder="Last Name" value="{{ old('lastname') }}" required
                                            autocomplete="lastname" autofocus>
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label for="email">Email Address*</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Email Address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label for="password">Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" placeholder="Confirm Password"
                                            class="form-control" name="password_confirmation" required
                                            autocomplete="new-password">
                                    </div>
                                    <div class="col-12">
                                        <button class="register-button mt-0">Register</button>
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


    @section('title')
        <title>Register</title>
    @endsection
