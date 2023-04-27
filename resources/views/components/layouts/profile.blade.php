@extends('layouts.main')
@section('title', 'Profile')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
                    <button type="button" class="btn upload-btn">Submit</button>
                </x-slot>
            </x-alert-modal>

            <hr class="mt-0">

            <div class="tabcontent" {{ $attributes }}>
                {{ $slot }}
            </div>
    </div>
@endsection
