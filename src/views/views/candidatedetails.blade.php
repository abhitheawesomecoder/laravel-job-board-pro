@extends('layouts.front')

@section('content')

                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Candidate Details</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Candidate Details</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="#">
                                    <div class="single-job-content">
                                        <div class="area-title text-center">
                                            <h2 class="pt-10 pb-10">{{ $can->profile_name }}</h2>
                                        </div>
                                        <div class="text-center">
                                           <h2 class="pt-10 pb-10">{{ $can->profile_title }}</h2>
                                        </div>
                                        <div class="title uppercase pt-70 pb-26"><span>profile description</span></div>
                                        <div class="single-job-form">
                                          <p> {{ $can->profile_description }} </p>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->

@endsection
