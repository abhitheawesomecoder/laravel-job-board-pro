@extends('layouts.front')

@section('content')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2 class="text-center text-white uppercase mb-17">Create Resume</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center m-0">
                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                            <li class="text-white uppercase ml-15 mr-15">Resume</li>
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
                <form action="{{ url('post-resume') }}" method="post" enctype="multipart/form-data">
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
                        <div class="title uppercase pt-50 pb-38"><span class="lg">Profile</span></div>
                        <div class="single-job-form">
                            <div class="single-info mb-14 fix">
                                <label for="photo" class="uppercase pull-left m-0">photo</label>
                                <div class="photo-uploader fix pull-left" id="fileupload">
                                    <input type="file" id="photo" name="profile_picture">
                                    <span class="filename">Upload photo (Maximum file size: 1MB 72*72)</span>
                                    <span class="action">Browse</span>
                                </div>
                            </div>
                            <div class="single-info pb-14">
                                <label for="f_name" class="uppercase pull-left m-0">First Name</label>
                                <div class="form-box fix">
                                    <input type="text" id="f_name" name="first_name" placeholder="Please enter your first name">
                                </div>
                            </div>
                            <div class="single-info pb-14">
                                <label for="m_name" class="uppercase pull-left m-0">Middle name</label>
                                <div class="form-box fix">
                                    <input type="text" id="m_name" name="middle_name" placeholder="Please enter your middle name">
                                </div>
                            </div>

                            <div class="single-info pb-14">
                                <label for="m_name" class="uppercase pull-left m-0">Last name</label>
                                <div class="form-box fix">
                                    <input type="text" id="m_name" name="last_name" placeholder="Please enter your last name">
                                </div>
                            </div>

                            <div class="single-info pb-14">
                                <label for="m_name" class="uppercase pull-left m-0">Profile title</label>
                                <div class="form-box fix">
                                    <input type="text" id="m_name" name="profile_title" placeholder="Please enter a profile title">
                                </div>
                            </div>

                        </div>
                        <div class="title uppercase mt-45 mb-38"><span class="medium">Contact Information</span></div>
                        <div class="single-job-form">
                            <div class="single-info mb-14">
                                <label for="country" class="uppercase pull-left m-0">country</label>
                                <div class="form-box fix">
                                    <input type="text" id="country" name="country" placeholder="Please enter your country name">
                                </div>
                            </div>
                            <div class="single-info mb-14">
                                <label for="city" class="uppercase pull-left m-0">city</label>
                                <div class="form-box fix">
                                    <input type="text" id="city" name="city" placeholder="Please enter your city name">
                                </div>
                            </div>
                            <div class="single-info mb-14">
                                <label for="address" class="uppercase pull-left m-0">address</label>
                                <div class="form-box fix">
                                    <input type="text" id="address" name="address" placeholder="Please enter your address">
                                </div>
                            </div>

                        </div>
                        <div class="title uppercase mt-45 mb-38"><span class="lg">Biography</span></div>
                        <div class="single-job-form">
                            <div class="single-info mb-14 fix">
                                <label class="uppercase pull-left m-0">description</label>

                                <div class="desc fix">
                                    <textarea name="description" class="fix textarea" cols="30" rows="10" placeholder="Please enter description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="title uppercase mt-45 mb-38"><span class="lg">Skills</span></div>
                        <div class="single-job-form">
                            <div class="single-info mb-14">
                                <label for="school_name" class="uppercase pull-left m-0">skills</label>
                                <div class="form-box fix">
                                    <input type="text" id="school_name" name="skills" placeholder="Please enter skills seperated by comma">
                                </div>
                            </div>

                        </div>
                        <div class="ml-160 mt-42">
                              <button type="submit" class="button submit-btn">Save</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Single Job Post Area-->
@endsection
