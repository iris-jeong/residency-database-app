@extends('layouts.main')
@section('title', 'Search')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endpush
@section('content')
<h1>Search</h1>

<ul id="run-report-routes" class="d-flex flex-row justify-content-between">
    <li id="test-li">(WIP, for testing convenience: )</li>
    <li id="test-report" class="nav-item">
        <a href="{{route('search.test')}}" class="nav-link">Test Report</a>
    </li>
    <li id="demo-report" class="nav-item">
        <a href="{{route('search.demographic')}}" class="nav-link">Demographic Report</a>
    </li>
    <li id="license-report" class="nav-item">
        <a href="{{route('search.license')}}" class="nav-link">License Report</a>
    </li>
</ul>

<div class="input-group mb-3" id="search-bar">
    <span class="input-group-text" id="search-bar-head"><img src="{{asset('icons/search.svg')}}" class="icons" id="search-bar-icon-head"/></span>
    <input type="text" id="searchinput" placeholder="Enter name" class="form-control shadow-none">
    <select class="form-select shadow-none" id="specialty-dropdown">
        <option value="0">Specialty</option>
        <option value="1">Abdominal Transplant</option>
        <option value="2">Advanced GI MIS</option>
        <option value="3">Breast Oncology</option>
        <option value="4">Cardiothoracic</option>
        <option value="5">Research</option>
        <option value="6">Colorectal</option>
        <option value="7">General</option>
        <option value="8">Hepatobiliary</option>
        <option value="9">Plastics & Reconstructive</option>
        <option value="10">Surgical & Critical Care</option>
        <option value="11">Trauma</option>
        <option value="12">Vascular</option>
    </select>
    <select class="form-select shadow-none" id="pgy-dropdown">
        <option value="0">PGY Level</option>
        <option value="1">PGY 1</option>
        <option value="2">PGY 2</option>
        <option value="3">PGY 3</option>
        <option value="4">PGY 4</option>
        <option value="5">Research</option>
        <option value="6">PGY 4</option>
        <option value="7">PGY 5</option>
        <option value="8">PGY 6</option>
        <option value="8">PGY 7</option>
    </select>
    <select class="form-select shadow-none" id="license-dropdown">
        <option value="0">License</option>
        <option value="1">ACLS</option>
        <option value="2">ATLS</option>
        <option value="3">BLS</option>
        <option value="4">CML</option>
        <option value="5">DEA</option>
        <option value="6">FCCS</option>
    </select>
    <button class="btn btn-light" id="search-btn" type="button"><img src="{{asset('icons/search.svg')}}" class="icons" id="search-bar-icon"/>Search</button>
</div>

@endsection