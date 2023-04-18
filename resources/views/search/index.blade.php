@extends('layouts.main')
@section('title', 'Search')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endpush
@section('content')
<header id="search-header" class="d-flex justify-content-between align-items-center">
<h1>Search</h1>

<!-- Current/Archived Select -->
<div class="search-options">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="search" id="current" checked>
        <label class="form-check-label" for="current">
            Current
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="search" id="archived">
        <label class="form-check-label" for="archived">
            Archive
        </label>
    </div>
</div>
</header>

<!-- Search Bar -->
<form>
    @csrf
    <div class="input-group mt-4" id="search-bar">
        <span class="input-group-text" id="search-bar-head"><img src="{{asset('icons/search.svg')}}" class="icons" id="search-bar-icon-head"/></span>
        <input type="text" id="searchinput" placeholder="Enter name" class="form-control shadow-none">
        <select class="form-select shadow-none" id="specialty-dropdown">
            <option value="0">Specialty</option>
            @foreach ($specialties as $specialty)
                <option value="{{intdiv($specialty->id, 10) +1}}">{{$specialty->name}}</option>
            @endforeach
        </select>
        <select class="form-select shadow-none" id="pgy-dropdown">
            <option value="0">PGY Level</option>
            @foreach ($pgyLevels as $pgyLevel)
                <option value="{{intdiv($pgyLevel->id, 10) + 1}}">{{$pgyLevel->level}}</option>
            @endforeach
        </select>
        <select class="form-select shadow-none" id="license-dropdown">
            <option value="0">License</option>
            @foreach ($licenses as $license)
                <option value="{{intdiv($license->id, 10) + 1}}">{{$license->name}}</option>
            @endforeach
        </select>
        <button class="btn btn-light" id="search-btn" type="button"><img src="{{asset('icons/search.svg')}}" class="icons" id="search-bar-icon"/>Search</button>
    </div>
</form>

<!-- Search Bar Table Box -->
<div id="search-table-div">
    <div id="search-table-details" class="d-flex align-items-center justify-content-between">
        <div id="search-pagination" class="d-flex align-items-center">
            <i class="me-5">{{$numDemographics}} Results</i>
            <p>1-50 of {{$numDemographics}}</p>
            <div class="d-flex align-items-center">
                <img src="{{asset('icons/left-arrow.svg')}}" alt="previous" class="arrow end-page icons mx-3"/>
                <img src="{{asset('icons/right-arrow.svg')}}" alt="next" class="arrow not-end-page icons mx-3"/>
            </div>
        </div>
        <div id="run-reports" class="d-flex align-items-center">
            <button type="button" class="btn btn-link runReportBtn d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#runReportModal">Run Report</p> <img src="{{asset('icons/right-arrow.svg')}}" alt="run report arrow" class="report-arrow arrow icons mx-3"/></button>
        </div>
    </div>

    <table class="table table-hover mt-2" id="search-table">
        <thead>
            <tr id="search-table-header" class="table-header">
                <th scope="col"></th>
                <th scope="col">Name <img src="{{asset('icons/up-arrow.svg')}}" alt="sort arrow" class="arrow icons table-arrow ms-2"/></th>
                <th scope="col">Level <img src="{{asset('icons/up-arrow.svg')}}" alt="sort arrow" class="arrow icons table-arrow ms-2"/></th>
                <th scope="col">Specialty</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $demographicUsers as $demo ) 
                <tr>
                    <td scope="row"></td>
                    <td>{{$demo->user->first_name}} {{$demo->user->last_name}}</td>
                    <td><span class="level pgy-{{intdiv($demo->pgyLevel->id, 10) + 1}} badge rounded-pill">{{$demo->pgyLevel->level}}</span></td>
                    <td class="spec-{{intdiv($demo->specialty->id,10)+1}}">{{$demo->specialty->name}}</td>
                    <td>{{$demo->user->email}}</td>
                    <td>{{$demo->phone_number}}</td>
                    <td class="status-cell"><div class="status status-good"></div></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-5">
    <p style="text-align:center">(WIP, for testing convenience: )</p>
    <ul id="run-report-routes" class="d-flex flex-row justify-content-evenly">
        <li id="test-report" class="nav-item">
            <a href="{{route('search.test')}}" class="nav-link">Test Report</a>
        </li>
        <li id="demo-report" class="nav-item">
            <a href="{{route('search.demographic')}}" class="nav-link">Demographic Report</a>
        </li>
        <li id="license-report" class="nav-item">
            <a href="{{route('search.license')}}" class="nav-link">License Report</a>
        </li>
        <li id="profile" class="nav-item">
            <a href="{{route('profile.index')}}" class="nav-link">Profile Page</a>
        </li>
    </ul>
</div>

<x-alert-modal type="modal-sm" id="runReportModal">
    <x-slot name="title">Select a report to run</x-slot>
    <x-slot name="label">runReportModalLabel</x-slot>
    <x-slot name="body">
        <div class="form-check">
            <input class="form-check-input" class="runReportsRadios" value="demographics" type="radio" name="runreportsradio" id="demographics-radio">
            <label class="form-check-label" for="demographics-radio">
                Demographics
            </label>
        </div>
        <div class="form-check my-3" id="license-div">
            <input class="form-check-input" class="runReportsRadios" value="license" type="radio" name="runreportsradio" id="licenses-radio">
            <label class="form-check-label" for="licenses-radio">
                Licenses
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" class="runReportsRadios" value="test" type="radio" name="runreportsradio" id="test-radio">
            <label class="form-check-label" for="test-radio">
                Test Scores
            </label>
        </div>
    </x-slot>
    <x-slot name="footer">
        <button type="button" class="btn btn-light" id="runReportModalBtn">Run Report</button>
    </x-slot>
</x-alert-modal>

@push('scripts')
<script src="{{ asset('js/search.js') }}"></script>
@endpush
@endsection