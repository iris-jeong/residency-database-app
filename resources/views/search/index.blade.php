@extends('layouts.main')
@section('title', 'Search')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
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
            Archived
        </label>
    </div>
</div>
</header>

<!-- Search Bar -->
<div class="input-group mt-4" id="search-bar">
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

<!-- Search Bar Table Box -->
<div id="search-table-div">
    <div id="search-table-details" class="d-flex align-items-center justify-content-between">
        <div id="search-pagination" class="d-flex align-items-center">
            <i class="me-5">300 Results</i>
            <p>1-50 of 300</p>
            <div class="d-flex align-items-center">
                <img src="{{asset('icons/left-arrow.svg')}}" alt="previous" class="arrow end-page icons mx-3"/>
                <img src="{{asset('icons/right-arrow.svg')}}" alt="next" class="arrow not-end-page icons mx-3"/>
            </div>
        </div>
        <div id="run-reports" class="d-flex align-items-center">
            <p>Run Report</p> <img src="{{asset('icons/right-arrow.svg')}}" alt="run report arrow" class="sort arrow icons mx-3"/>
        </div>
    </div>

    <table class="table table-hover mt-2" id="search-table">
        <thead>
            <tr id="search-table-header">
                <th scope="col"></th>
                <th scope="col">Name <img src="{{asset('icons/up-arrow.svg')}}" alt="sort arrow" class="arrow sort icons table-arrow ms-2"/></th>
                <th scope="col">Level <img src="{{asset('icons/up-arrow.svg')}}" alt="sort arrow" class="arrow sort icons table-arrow ms-2"/></th>
                <th scope="col">Specialty</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td>Hannah Abott</td>
                <td><span class="level pgy-1 badge rounded-pill">PGY 1</span></td>
                <td>Cardiothoracic</td>
                <td>habott@usc.edu</td>
                <td>310-555-1231</td>
                <td class="status-cell"><div class="status status-good"></div></td>
            </tr>
            <tr>
                <td></td>
                <td>Tommmy Trojan</td>
                <td><span class="level pgy-2 badge rounded-pill">PGY 2</span></td>
                <td>Hepatobillary</td>
                <td>ttrojan@usc.edu</td>
                <td>310-555-1231</td>
                <td><div class="status status-good"></div></td>
            </tr>
            <tr>
                <td></td>
                <td>Jenny Kim</td>
                <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                <td>Breast Oncology</td>
                <td>jkim@usc.edu</td>
                <td>310-555-1231</td>
                <td><div class="status status-bad"></div></td>
            </tr>
            <tr>
                <td></td>
                <td>Bob Bruin</td>
                <td><span class="level pgy-4 badge rounded-pill">PGY 4</span></td>
                <td>Colorectal</td>
                <td>bbruin@usc.edu</td>
                <td>310-555-1231</td>
                <td><div class="status status-bad"></div></td>
            </tr>
            <tr>
                <td></td>
                <td>Carol Folt</td>
                <td><span class="level pgy-5 badge rounded-pill">PGY 5</span></td>
                <td>General</td>
                <td>cfolt@usc.edu</td>
                <td>310-555-1231</td>
                <td><div class="status status-good"></div></td>
            </tr>
            <tr>
                <td></td>
                <td>Lincoln Riley</td>
                <td><span class="level pgy-6 badge rounded-pill">PGY 6</span></td>
                <td>Surgical & Critical Care</td>
                <td>lriley@usc.edu</td>
                <td>310-555-1231</td>
                <td><div class="status status-good"></div></td>
            </tr>
            <tr>
                <td></td>
                <td>Cho Chang</td>
                <td><span class="level pgy-7 badge rounded-pill">PGY 7</span></td>
                <td>Plastics & Reconstructive</td>
                <td>cchang@usc.edu</td>
                <td>310-555-1231</td>
                <td><div class="status status-bad"></div></td>
            </tr>
            <tr>
                <td></td>
                <td>Katie Bell</td>
                <td><span class="level research badge rounded-pill">Research</span></td>
                <td>Research</td>
                <td>kbell@usc.edu</td>
                <td>310-555-1231</td>
                <td><div class="status status-good"></div></td>
            </tr>
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
    </ul>
</div>

@push('scripts')
<script src="{{ asset('js/search.js') }}"></script>
@endpush
@endsection