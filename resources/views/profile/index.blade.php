@extends('layouts.main')
@section('title', 'Profile')

@section('content')
<div id="content">
        <div class="row col-sm-12" id="basic-info">
            <div class="col-sm-3" id="basic-photo">
                <img src="{{asset('images/profile_pic.png')}}" id="profile-pic" alt="Profile Pic"> 
            </div>
            <div class="col-sm-9" id="basic-text">
                <div class="row">
                    <div class="col-6">
                        <h2 class="my-2">Hannah Abbott</h2>
                    </div>
                    <div class="col-3 mt-3">
                        <span class="badge py-2" id="specialty">Cardiothoracic</span>
                    </div>
                    <div class="col-3 mt-3">
                        <span class="badge rounded-pill" id="pgy">PGY 3</span>
                    </div>
                </div>
                <div class="row my-2">
                    <a><span class="fw-bold">Email:</span> habott@usc.edu</a>
                </div>
                <div class="row my-2">
                    <a><span class="fw-bold">Phone:</span> 310-555-5098</a>
                </div>
                <div class="row my-2">
                    <a><span class="fw-bold">Address:</span> 2349 Privet Dr., Little Whinging, Surrey 98390</a>
                </div>
                
            </div>
            

        </div>
</div>
@endsection
