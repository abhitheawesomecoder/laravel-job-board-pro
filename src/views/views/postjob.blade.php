@extends('layouts.front')

@section('content')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2 class="text-center text-white uppercase mb-17">Post a job</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center m-0">
                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                            <li class="text-white uppercase ml-15 mr-15">Post a Job</li>
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

                <form action="{{ url('post-job') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="margin-bottom: 10px">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="single-job-content">
                        <div class="area-title text-center">
                            <h2 class="pt-10 pb-10">Describe Your Job</h2>
                        </div>
                        <div class="title uppercase pt-70 pb-38"><span>Job Details</span></div>
                        <div class="single-job-form">
                            <div class="single-info pb-14">
                                <label for="title" class="uppercase pull-left m-0">Job Title</label>
                                <div class="form-box fix">
                                    <input type="text" id="title" name="job_title" placeholder="Enter your job title">
                                </div>
                            </div>
                            <div class="single-info mb-14 fix">
                                <label class="uppercase pull-left m-0">description</label>

                                <div class="desc fix">
                                    <textarea name="job_description" class="fix textarea" cols="30" rows="10" placeholder="Please enter your job description"></textarea>
                                </div>
                            </div>
                            <div class="single-info pb-14">
                                <label for="location" class="uppercase pull-left m-0">Job location</label>
                                <div class="form-box fix">
                                    <input type="text" id="location" name="job_location" placeholder="Enter your job location">
                                </div>
                            </div>
                      {{--  <div class="map-area ml-160 mb-14">
                                <div id="googleMap" style="width:100%;height:160px;"></div>
                            </div> --}}
                            <div class="single-info pb-14">
                                <label for="type" class="uppercase pull-left m-0">Job type</label>
                                <div class="form-box fix">
                                  <select name="job_type" style='font-size: 13px;background: #ffffff none repeat scroll 0 0;border: 1px solid #cccccc;color: #959595;font-family: "montserratlight";height: 36px;'>
                                   <option value="">Select job type</option>
                                   <option value="FULLTIME">Full Time</option>
                                   <option value="PARTTIME">Part Time</option>
                                   <option value="INTERNSHIP">Internship</option>
                                  </select>
                                </div>
                            </div>
                            <div class="single-info pb-14">
                                <label for="type" class="uppercase pull-left m-0">Job Category</label>
                                <div class="form-box fix">
                                  <select name="job_category" style='font-size: 13px;background: #ffffff none repeat scroll 0 0;border: 1px solid #cccccc;color: #959595;font-family: "montserratlight";height: 36px;'>
                                   <option value="">Select job category</option>
                                   <option value="Designing">Designing</option>
                                   <option value="Development">Development</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="title uppercase mt-45 mb-38"><span>Company Profile</span></div>
                        <div class="single-job-form">
                            <div class="single-info mb-14">
                                <label for="company-name" class="uppercase pull-left m-0">company name</label>
                                <div class="form-box fix">
                                    <input type="text" id="company-name" name="company_name" placeholder="Please enter your company name">
                                </div>
                            </div>

                            <div class="single-info mb-14 fix">
                                <label class="uppercase pull-left m-0">company logo</label>
                                <div class="uploader fix pull-left fileupload">
                                    <input type="file" id="fileupload" name="company_logo">
                                    <span class="filename">Upload your company logo</span>
                                    <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>
                                </div>
                                <span class="ml-20 pull-left max-size">Maximum file size: 1MB (72*72)</span>
                            </div>


                            <div class="ml-160 mt-38">

                                <button type="submit" class="button submit-btn">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Single Job Post Area-->
@endsection
