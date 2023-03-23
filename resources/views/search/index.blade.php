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
@endsection