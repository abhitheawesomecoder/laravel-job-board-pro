@extends('layouts.front')

@section('content')
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Login</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Login</li>
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
                                <form role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    <div class="area-title text-center">
                                        <h2 class="pt-10 pb-10">Login or create an account</h2>
                                    </div>
                                    <div class="account-form-container fix mt-70">
                                      {{--  <a class="button button-style-two medium mt-15" href="#" data-toggle="modal" data-target="#register">Register</a> --}}
                                        <div class="text-center fix">
                                            <a class="button button-style-two medium mt-15 modal-view" href="{{ url('/register') }}" >Register</a>
                                        </div>
                                        <div class="login-form mt-36">
                                            <div class="single-info pb-14 fix">
                                                <label for="f_name" class="pull-left m-0 lg-text">E-Mail Address:</label>
                                                <div class="form-box col-4 fix">
                                                    <input type="text" id="f_name" name="email" class="dark-border" placeholder="Please enter your email">
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
                                                    <input type="password" id="password" name="password" class="dark-border" placeholder="Please enter your password">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong style="color:red">{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                        <span class="block conditions fix mt-34"><input type="checkbox" name="remember" class="p-0 pull-left">Remember Me</span>
                                        <button class="button button-style-two medium mt-15">Login</button>
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Account Area-->
@endsection
