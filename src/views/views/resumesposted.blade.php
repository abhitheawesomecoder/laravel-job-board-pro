@extends('layouts.front')

@section('content')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area pt-150 bg-3 bg-opacity-black-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2 class="text-center text-white uppercase mb-17">Resume Posted</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center m-0">
                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                            <li class="text-white uppercase ml-15 mr-15">Candidates</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Start of Candidates Area-->
<div class="candidates-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center ">
                    <h2 class="uppercase">Candidates</h2>
                    <div class="separator mt-35 mb-77">
                        <span><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/images/icons/1.png') }}" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="job-post-container fix mb-70">

                @foreach ($candidates as $can)
                    <div class="single-job-post fix">
                        <div class="job-title col-3 pl-30">
                            <span class="pull-left block mtb-17">
                                <a href="{{ url('candidate-details').'/'.$can->id }}"><img src="{{ url('vendor/abhitheawesomecoder/jobboardpro/assets/'. $can->profile_pic) }}" alt=""></a>
                            </span>
                            <div class="fix pl-30 mt-29">
                                <h4 class="mb-5">{{ $can->profile_name }}</h4>
                                <h5><a href="#">{{ $can->profile_title }}</a></h5>
                            </div>
                        </div>
                        <div class="address col-3 pl-100">
                            <span class="mtb-30 block">{{ $can->address }}</span>
                        </div>
                        <div class="keyword col-2 pl-20 pt-39">

                @foreach (explode(",",  $can->skills) as $skill)
                            <a href="#" class="button mr-10">{{ $skill }}</a>
                @endforeach
                        </div>

                        <div class="time-payment col-2 pl-60 text-center pt-22">
                          @if($can->active)
                              <span><a href="{{ url('activateresume').'/'.$can->id }}" class="button button-green" style="background-color:green">.Active.</a></span>
                          @else
                            <span><a href="{{ url('activateresume').'/'.$can->id }}" class="button button-green" style="background-color:orange">Activate</a></span>
                          @endif
                            <a href="{{ url('edit-resume').'/'.$can->id }}" class="button button-red" style="background-color:#5bc0de">Edit</a>
                        </div>

                    </div>
                @endforeach


                </div>

            </div>
        </div>
    </div>
</div>
<!-- End of Candidates Area -->
@endsection
