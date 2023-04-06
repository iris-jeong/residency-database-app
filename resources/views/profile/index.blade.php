@extends('layouts.main')
@section('title', 'Profile')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endpush

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
                        <span class="level pgy-3 badge rounded-pill">PGY 3</span>
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

        <div class="row col-sm-12" id="table-area">
            <table class="table">
                <thead>
                  <tr id="search-table-header" class="table-header">
                    <th scope="col"></th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Upload Date</th>
                    <th scope="col">Expiration Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td>ACLS License</td>
                    <td>2/15/20</td>
                    <td>5/5/23</td>
                    <td><span class="uploaded badge rounded-pill">Uploaded</span></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>BLS License</td>
                    <td>2/16/20</td>
                    <td>12/4/22</td>
                    <td><span class="expired-missing badge rounded-pill">Expired</span></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>CV</td>
                    <td>1/8/20</td>
                    <td>--</td>
                    <td><span class="uploaded badge rounded-pill">Uploaded</span></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Driver's License</td>
                    <td></td>
                    <td></td>
                    <td><span class="expired-missing badge rounded-pill">Missing</span></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Demographics</td>
                    <td>3/19/20</td>
                    <td>--</td>
                    <td><span class="uploaded badge rounded-pill">Uploaded</span></td>
                  </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection
