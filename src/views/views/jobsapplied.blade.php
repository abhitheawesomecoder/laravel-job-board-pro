@extends('layouts.front')

@section('content')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area pt-150 bg-3 bg-opacity-black-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2 class="text-center text-white uppercase mb-17">Job Board</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center m-0">
                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                            <li class="text-white uppercase ml-15 mr-15">Job Board</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Start of Job Post Area-->
<div class="job-post-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center ">
                    <h2 class="uppercase">Jobs Applied</h2>
                    <div class="separator mt-35 mb-77">
                        <span><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/images/icons/1.png') }}" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="job-post-container fix">

                  @foreach ($jobs as $job)
                    <div class="single-job-post fix">
                        <div class="job-title col-4 pl-30">
                            <span class="pull-left block mtb-17">
                                <a href="#"><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/'. $job->company_logo) }}" alt=""></a>
                            </span>
                            <div class="fix pl-30 mt-29">
                                <h4 class="mb-5">{{ $job->job_title }}</h4>
                                <h5><a href="#">{{ $job->company_name }}</a></h5>
                            </div>
                        </div>
                        <div class="address col-4 pl-50">
                            <span class="mtb-30 block">{{ $job->job_location }}</span>
                        </div>
                        <div class="time-payment col-2 pl-60 text-center pt-22">
                            <span style="font-family: 'Poppins', sans-serif" class="block mb-6">{{ $job->job_category }}</span>
                            <a href="{{ url('job-details').'/'.$job->id }}" class="button button-red">Full Time</a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Job Post Area -->

@endsection
