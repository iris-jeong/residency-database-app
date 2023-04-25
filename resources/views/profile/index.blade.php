@extends('layouts.main')
@section('title', 'Profile')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
@endpush

@section('content')
  <div id="profile-container">
    <div class="row col-sm-12" id="basic-info">
        <div class="col-sm-3" id="basic-photo">
            <img src="{{asset('images/profile_pic.png')}}" id="profile-pic" alt="Profile Pic"> 
        </div>
        <div class="col-sm-9" id="basic-text">
            <div class="d-flex">
                <div class="">
                    <h2 class="my-2">{{$user->first_name}} {{$user->last_name}}</h2>
                </div>
                <div class="mt-3 mx-3">
                    <span class="badge py-2" id="specialty">{{$user->demographic->specialty->name}}</span>
                </div>
                <div class="mt-3">
                  <span class="level {{ str_replace(' ', '', $user->demographic->pgyLevel->level) }} badge rounded-pill">
                    {{$user->demographic->pgyLevel->level}}
                  </span>
                </div>
            </div>
            <div class="row my-2">
                <a><span class="fw-bold">Email:</span> {{$user->email}}</a>
            </div>
            <div class="row my-2">
                <a><span class="fw-bold">Phone:</span> {{$user->demographic->phone_number}}</a>
            </div>
            <div class="row my-2">
                <a><span class="fw-bold">Address:</span> {{$user->demographic->address}} {{$user->demographic->city}}, {{$user->demographic->state}} {{$user->demographic->zip}}</a>
            </div>
        </div>
    </div>

    <div class="row col-sm-12">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <button type="button" class="btn upload-btn" data-bs-toggle="modal" data-bs-target="#uploadModal"><i class="bi bi-upload"></i>Upload</button>
        </div>
    </div>

    <x-tabmenu.tabs>
        <x-tabmenu.tab title="Required Documents" route="{{ route('profile.requirements', ['id' => $id]) }}">Required Documents</x-tabmenu.tab>
        <x-tabmenu.tab title="All Files" route="{{ route('profile.all', ['id' => $id]) }}">All Files</x-tabmenu.tab>
    </x-tabmenu.tabs>

    <x-alert-modal type="" id="uploadModal">
        <x-slot name="title">Upload Files</x-slot>
        <x-slot name="label">uploadModalLabel</x-slot>
        <x-slot name="method"></x-slot>
        <x-slot name="action"></x-slot>
        <x-slot name="body"><input class="form-control" type="file" id="formFileMultiple" multiple></x-slot>
        <x-slot name="footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </x-slot>
    </x-alert-modal>

    <hr class="mt-0">

    <div class="tabcontent">
      @if (request()->route()->getName() === 'profile.requirements')
        <div id="table-area">
          <table class="table">
            <thead>
              <tr id="search-table-header" class="table-header">
                <th scope="col"></th>
                <th scope="col">Document Name</th>
                <th scope="col">Expiration Date</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td>ACLS License</td>
                <td>5/5/23</td>
                <td><span class="uploaded badge rounded-pill">Uploaded</span></td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>BLS License</td>
                <td>12/4/22</td>
                <td><span class="expired-missing badge rounded-pill">Expired</span></td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>CV</td>
                <td>--</td>
                <td><span class="uploaded badge rounded-pill">Uploaded</span></td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>Demographics</td>
                <td>--</td>
                <td><span class="uploaded badge rounded-pill">Uploaded</span></td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>Driver's License</td>
                <td>5/21/23</td>
                <td><span class="uploaded badge rounded-pill">Uploaded</span></td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>Immunization Records</td>
                <td></td>
                <td><span class="expired-missing badge rounded-pill">Missing</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      @else
        <div class="row col-sm-12" id="table-area">
          <table class="table">
            <thead>
              <tr id="search-table-header" class="table-header">
                <th scope="col"></th>
                <th scope="col">File Name</th>
                <th scope="col">Upload Date</th>
                <th scope="col">Upload Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td><i class="bi bi-file-earmark-pdf"></i>acls_license.pdf</td>
                <td>2/15/20</td>
                <td>9:32 am</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td><i class="bi bi-file-earmark-pdf"></i>bls_license.pdf</td>
                <td>2/16/20</td>
                <td>7:24 pm</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td><i class="bi bi-file-earmark-text"></i>hannah_CV.doc</td>
                <td>1/8/20</td>
                <td>12:04 pm</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td><i class="bi bi-file-earmark-image"></i>drivers_license.jpg</td>
                <td>3/9/21</td>
                <td>3:21 pm</td>
              </tr>
            </tbody>
          </table>
        </div>
      @endif
    </div>
  </div>
@endsection
