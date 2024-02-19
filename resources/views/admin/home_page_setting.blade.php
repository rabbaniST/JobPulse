@extends('admin.layouts.app');

@section('heading', "Home Page Settings")

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin_profile_submit')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-lable">Heading *</label>
                                    <input type="text" class="form-control" name="heading" value="Find Your Desired Job">
                                </div>
                                <div class="mb-4">
                                    <label class="form-lable">Text *</label>
                                    <textarea class="form-control" name="heading" cols="30" rows="10" >Search the best, perfect and suitable jobs that matches your skills in your expertise area.</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-lable">Job Title *</label>
                                            <input type="text" class="form-control" name="" value="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-lable">Job Location *</label>
                                            <input type="text" class="form-control" name="" value="Job Location">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-lable">Job Category *</label>
                                            <input type="text" class="form-control" name="" value="Job Category">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-lable">Search *</label>
                                            <input type="text" class="form-control" name="" value="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4"> +
                                    <label class="form-lable">Background Image *</label>
                                    <div>
                                        <img src="{{asset('forntend/uploads/home_banner.jpg')}}" alt="" class="w_300">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Image</label>
                                    <div class="mb-4">
                                        <input type="file" class="form-control mt_10" name="photo">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-control"></label>
                                    <button type="submit" class="btn btn-primary mt-4">Update</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
