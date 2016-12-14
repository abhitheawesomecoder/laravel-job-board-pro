@extends('layouts.front')

@section('content')
<style>
.bg-1 {
    background: url('https://devitems.com/html/jobhelp-preview/jobhelp/images/bg/1.jpg');
}
</style>
            <!--Background Area Start-->
            <div class="background-area no-overlay">
                <img src="https://devitems.com/html/jobhelp-preview/jobhelp/images/slider/2.jpg" alt=""/>
                <div class="banner-content static-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content-wrapper full-width">
                                    <div class="text-content text-center">
                                        <h1 class="title1 text-center text-uppercase text-white mb-16">
                                            <span class="tlt block color-blue" data-in-effect="rollIn" data-out-effect="fadeOutRight" >LOOKING FOR A JOB?</span>
                                        </h1>
                                        <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="2500ms" data-wow-delay=".1s">
                                            <a class="button slider-btn" href="{{ url('job-board') }}">Find a job</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Background Area-->
            <!--Start of Job Post Area-->
            <div class="job-post-area ptb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center ">
                                <h2 class="uppercase">Recent Jobs</h2>
                                <div class="separator mt-35 mb-77">
                                    <span><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/images/icons/1.png') }}" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="job-post-container fix mb-70">
                              @foreach ($ufjobs as $job)
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
                                        <span class="block mb-6">$ {{ $job->payment }}</span>
                                        <a href="{{ url('job-details').'/'.$job->id }}" class="button button-red">Full Time</a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="text-center">
                                <a href="#" class="button large-button">Browse all jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Job Post Area -->
            <!--Start of Job Post Area-->
            <div class="job-post-area pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center ">
                                <h2 class="uppercase">Featured Jobs</h2>
                                <div class="separator mt-35 mb-77">
                                    <span><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/images/icons/1.png') }}" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="job-post-container fix">


                              @foreach ($fjobs as $job)
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
                                      <span class="block mb-6">$ {{ $job->payment }}</span>
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
            <!--Start of Fun Factor Area-->
            <div class="fun-factor-area bg-1 text-center fix bg-opacity-blue-10 ptb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <h3 class="pb-15 mb-23">Jobs</h3>
                                <h1><span class="counter">1250</span></h1>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <h3 class="pb-15 mb-23">Members</h3>
                                <h1><span class="counter">500</span></h1>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <h3 class="pb-15 mb-23">Resume</h3>
                                <h1><span class="counter">700</span></h1>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <h3 class="pb-15 mb-23">Company</h3>
                                <h1><span class="counter">1250</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Fun Factor Area-->
            <!--Start of Advertise Area-->
            <div class="advertise-area ptb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1 col-md-6 col-xs-12">
            <div class="fix video-post">
              <div class="player-blog" data-property="{videoURL:'https://www.youtube.com/watch?v=5QOR3GPb7hk',containment:'self',autoPlay:false, mute:false, startAt:1, opacity:1}">video Post</div>
            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="advertise-content pl-15">
                                <h3 class="uppercase pb-16 mb-21 mt-26">Join Thousands of <br>
                                Companies That Rely on Jobify</h3>
                                <p class="pr-50">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.available, but the majority have suffered alteration in some form,</p>
                                <a href="#" class="button large-button mt-9">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Advertise Area-->
            <!--Testimonial Area Start-->
            <div class="testimonial-area bg-2 text-center fix bg-opacity-blue-70 ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="testimonial-carousel carousel-style-one">
                                <div class="single-testimonial">
                                    <div class="testimonial-img mb-18">
                                        <img src="https://devitems.com/html/jobhelp-preview/jobhelp/images/testimonial/1.jpg" alt="" />
                                    </div>
                                    <div class="testimonial-info">
                                        <span class="testimonial-name uppercase text-white block">Kevin Roberts</span>
                                        <span class="testimonial-title text-white block">CEO,Ajobko</span>
                                    </div>
                                    <div class="testimonial-text pt-46">
                                        <p class="text-white p-0">I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.I have already heard back about the internship I applied through Job Finder, that's the fastest job reply</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Testimonial Area-->



@endsection
