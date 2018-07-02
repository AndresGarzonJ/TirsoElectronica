@extends('layouts.front.app')

@section('content')
    
    <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            <h1>My Account</h1>
                            <ul>
                                <li><a href="#">Home</a> /</li>
                                <li>Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
    
    <!-- Login Registration Page Area Start Here -->
    <div class="login-registration-page-area">
        <div class="container">
            <div class="col-md-12">@include('layouts.errors-and-messages')</div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-registration-field">
                        <h2 class="cart-area-title">Login</h2>
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                            <label for="email">Email address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Name or E-mail" autofocus />
                            <label  for="password">Password *</label>
                            <input type="password" name="password" id="password" value="" placeholder="Password" />
                            <a href="{{route('password.request')}}">Lost your password?</a>
                            <br>
                            <a href="{{route('register')}}">No account? Register here</a>
                            <br>
                            <button class="btn-send-message disabled" type="submit">Login</button>
                            <span><input type="checkbox" name="remember"/>Remember Me</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Registration Page Area End Here -->
@endsection
