@extends('layouts.front')

@section('content')

                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Job Details</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Job Details</li>
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
                                            <h2 class="pt-10 pb-10">{{ $job->job_title }}</h2>
                                        </div>
                                        <div class="title uppercase pt-70 pb-26"><span>job description</span></div>
                                        <div class="single-job-form">
                                          <p> {{ $job->job_description }} </p>
                                        </div>

                                        <div class="ml-160 mt-38">
                                            <a href="{{ url('apply').'/'.$job->id }}" class="button button-large-box">Apply</a>
                                            <a target="_blank" href="{{ url('resumes-posted') }}" class="button button-large-box">Review Resume</a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->

@endsection
