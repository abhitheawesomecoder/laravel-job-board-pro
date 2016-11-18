@extends('layouts.front')

@section('content')

<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2 class="text-center text-white uppercase mb-17">Contact</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center m-0">
                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                            <li class="text-white uppercase ml-15 mr-15">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Start of Map and Contact Form Area-->
<div class="map-conact-form-area fix">
    <!--Start of Google Map-->
    <div class="google-map-area">
        <!--  Map Section -->
        <div id="contacts" class="map-area">
            <div id="googleMap" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div>
        </div>
    </div>
    <!--End of Google Map-->
    <!--Start of Contact Form And info-->
    <div class="contact-form-and-info">
        <div class="contact-form white-bg fix pr-125 pl-125 pt-40 pb-35">
            <form id="contact-form" action="{{ url('sendcontactmail') }}" method="post">
                {{ csrf_field() }}
                <div class="col-5 pr-6 mb-15">
                    <label for="name" class="block ml-20">Name</label>
                    <input type="text" name="name" id="name" class="pl-20" placeholder="Please enter your name">
                </div>
                <div class="col-5 pl-6 mb-15">
                    <label for="email" class="block ml-20">Email</label>
                    <input type="text" name="email" id="email" class="pl-20" placeholder="Please enter your email">
                </div>
                <div class="col-10">
                    <label for="message" class="block ml-20">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Please enter your message" class="mb-10"></textarea>
                </div>
                <div class="col-10 fix">
                    <button type="submit" class="button submit-btn">SUBMIT</button>
                </div>
                <p class="form-messege"></p>
            </form>
        </div>
        <div class="contact-info text-center fix pt-120 pb-115">
            <div class="single-contact-info">
                <div class="single-contact-icon">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="single-contact-text mt-18">
                    <span class="block">devitems@email.com</span>
                    <span class="block">jobhelp25@email.com</span>
                </div>
            </div>
            <div class="single-contact-info">
                <div class="single-contact-icon">
                    <i class="zmdi zmdi-phone"></i>
                </div>
                <div class="single-contact-text mt-18">
                    <span class="block">+9 55845 5485 685</span>
                    <span class="block">+58 96584 5785 658</span>
                </div>
            </div>
            <div class="single-contact-info">
                <div class="single-contact-icon">
                    <i class="zmdi zmdi-pin"></i>
                </div>
                <div class="single-contact-text mt-18">
                    <span class="block">House 09, Road 32, Mohammadpur,</span>
                    <span class="block">Dhaka-1200, UK</span>
                </div>
            </div>
        </div>
    </div>
    <!--End of Contact Form ANd info-->
</div>
<!--End of Map and Contact Form-->

@endsection
