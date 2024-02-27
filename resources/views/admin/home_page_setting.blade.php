@extends('admin.layouts.app');

@section('heading', 'Home Page Settings')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home_page_update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true">Search</button>

                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Job Category</button>
                            </div>
                            <div class="col-lg-9 col-md-">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    {{-- Search Section Start Here --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-lable">Heading *</label>
                                                    <input type="text" class="form-control" name="heading"
                                                        value="{{$home_page_data->heading}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-lable">Text </label>
                                                    <textarea class="form-control h_100" name="text" cols="30" rows="10">{{$home_page_data->text}}</textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-4">
                                                            <label class="form-lable">Job Title *</label>
                                                            <input type="text" class="form-control" name="job_title"
                                                                value="{{$home_page_data->job_title}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-4">
                                                            <label class="form-lable">Job Location *</label>
                                                            <input type="text" class="form-control" name="job_location"
                                                                value="{{$home_page_data->job_location}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-4">
                                                            <label class="form-lable">Job Category *</label>
                                                            <input type="text" class="form-control" name="job_category"
                                                                value="{{$home_page_data->job_category}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-4">
                                                            <label class="form-lable">Search *</label>
                                                            <input type="text" class="form-control" name="search"
                                                                value="{{$home_page_data->search}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4"> +
                                                    <label class="form-lable">Background Image *</label>
                                                    <div>
                                                        <img src="{{ asset('forntend/uploads/'.$home_page_data->background) }}"
                                                            name="background" class="w_300">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Change Image</label>

                                                        <input type="file" class="form-control mt_10" name="background">
                                                </div>
                                            </div>
                                        </div>
                                    {{-- Search Section Ends Here --}}
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    {{-- Category Section Start Here --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-lable">Heading *</label>
                                                <input type="text" class="form-control" name="job_category_heading"
                                                    value="{{$home_page_data->job_category_heading}}">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-lable">Sub Heading </label>
                                                <input type="text" class="form-control" name="job_category_subheading"
                                                    value="{{$home_page_data->job_category_subheading}}">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-lable">Status *</label>
                                                <select name="job_category_status" class="form-control" id="">
                                                    <option value="Show" @if($home_page_data->job_category_status == 'Show') selected @endif>Show</option>
                                                    <option value="Hide"  @if($home_page_data->job_category_status == 'Hide') selected @endif>Hide</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
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
