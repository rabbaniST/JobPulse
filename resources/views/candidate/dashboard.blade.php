@extends('Forntend.layout.app')

@section('main-content')
<div class="page-top" style="background-image: url('{{ asset('forntend/uploads/banner.jpg') }}')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dashboard</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('candidate.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <h3>Hello, {{ Auth::guard('candidate')->user()->name }}</h3>
                <p>See all the statistics at a glance:</p>

                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>{{ $total_applied_jobs }}</h4>
                            <h4>Total Applied</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box2">
                           <h4>{{ $total_approved_jobs }}</h4>
                           <h4>Total Approved</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box3">
                            <h4>{{ $total_rejected_jobs }}</h4>
                            <p>Rejected Jobs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
