@extends('layouts.front')

@section('content')

<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2 class="text-center text-white uppercase mb-17">Register</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center m-0">
                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                            <li class="text-white uppercase ml-15 mr-15">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Start of Account Area-->
<div class="account-area pt-70 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="area-title text-center">
                        <h2 class="pt-10 pb-10">Login or create an account</h2>
                    </div>
                    <div class="account-form-container fix mt-70">
                        <a class="button button-style-two medium mb-7 modal-view" href="{{ url('/login') }}">Already have account ?</a>

                        <div class="login-form mt-36">
                            <div class="single-info pb-14 fix">
                                <label for="name" class="pull-left m-0 lg-text">Name:</label>
                                <div class="form-box col-4 fix">
                                    <input type="text" id="name" name="name" placeholder="Please enter your name">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="single-info mb-14 fix">
                                <label for="email" class="pull-left m-0 lg-text">Email address:</label>
                                <div class="form-box col-4 fix">
                                    <input type="text" id="email" name="email" placeholder="Please enter your email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="single-info mb-14 fix">
                                <label for="password" class="pull-left m-0 lg-text">Password:</label>
                                <div class="form-box col-4 fix">
                                    <input type="password" id="password" name="password" placeholder="Please enter your password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong style="color:red">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="single-info mb-14 fix">
                                <label for="r_password" class="pull-left m-0 lg-text">Retype password:</label>
                                <div class="form-box col-4 fix">
                                    <input type="password" id="r_password" name="password_confirmation" placeholder="Please enter your password">
                                </div>
                            </div>
                        </div>

                        <button class="button button-style-two medium mt-15">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Account Area-->
@endsection
