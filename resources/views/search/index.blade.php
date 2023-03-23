@extends('layouts.main')
@section('title', 'Search')
@push('stylesheets')
  <link rel="stylesheet" href="{{asset('search.css')}}">
@endpush
@section('content')
<h1>Search</h1>
<!-- Search bar -->
<div class="input-group mb-3" id="search-bar">
    <span class="input-group-text pl-4" id="search-bar-head"><img src="{{asset('icons/search.svg')}}" class="icons" id="search-bar-icon-head"/></span>
    <input type="text" class="form-control shadow-none" id="searchinput" placeholder="Enter name">
    <select class="form-select shadow-none" id="specialty-dropdown">
        <option selected>Specialty</option>
        <option value="1">day</option>
        <option value="2">week</option>
        <option value="3">month</option>
        <option value="4">year</option>
    </select>
    <select class="form-select shadow-none" id="pgy-dropdown">
        <option selected>PGY level</option>
        <option value="1">6 months before due</option>
        <option value="2">5 months before due</option>
        <option value="3">4 months before due</option>
        <option value="4">3 months before due</option>
        <option value="5">2 months before due</option>
        <option value="6">1 months before due</option>
        <option value="7">2 weeks before due</option>
        <option value="8">1 week before due</option>
        <option value="9">day of due date</option>
        <option value="10">day after due date</option>
    </select>
    <select class="form-select shadow-none" id="license-dropdown">
        <option selected>License</option>
        <option value="1">day</option>
        <option value="2">week</option>
        <option value="3">month</option>
        <option value="4">year</option>
    </select>
    <button class="btn btn-light" id="search-btn" type="button"><img src="{{asset('icons/search.svg')}}" class="icons" id="search-bar-icon"/> Search</button>
</div>
@endsection