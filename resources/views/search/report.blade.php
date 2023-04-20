@extends('layouts.main')
@section('title', 'Report')

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/runreports.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablesort.css') }}">
@endpush

@section('content')
<div id="test-score-header">
    <div class="row">
        <div class="col">
            <a href="/search"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
        </div>
        <div class="col-4">
            <h1>{{$reportType}} Report</h1>
        </div>
        <div class="col-7">
            <button type="button" class="btn btn-sm btn-outline-dark" disabled>Cardiothoracic</button>
        </div>
    </div>
</div>

<div id="test-score-report">
    <div class="row">
        <div class="col-2">
        <p>{{$reportType}} Report</p>
        </div>
        <div class="col-sm">
        <i class="fa-regular fa-arrow-down-to-bracket"></i>
        <span>(0 Selected)</span>
        </div>
    </div>

    <div class="table-container">
        <table class="table table-hover table-sortable">
            <thead>
                <tr class="table-header">
                <th scope="col"><img src="{{asset('images/check_box_indeterminate.png')}}" alt="check box" class="checkbox icons table-checkbox ms-2"/></th>
                <th scope="col">Name &#11109</th>
                <th scope="col">Level &#11109</th>
                @foreach($columns as $column)
                    <th scope="col">{{$column}}</th>
                @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($demographics as $demographic)
                    <tr>
                        <td><input class="form-check-input" type="checkbox" value="" id="select"></td>
                        <td>{{$demographic->user->first_name}} {{$demographic->user->last_name}}</td>
                        <td><span class="level {{ str_replace(' ', '', $demographic->pgyLevel->level) }} badge rounded-pill">{{$demographic->pgyLevel->level}}</span></td>
                        <td><u>{{$demographic->user->email}}</u></td>
                        <td>{{$demographic->phone_number}}</td>
                        <td>{{$demographic->npi_number}}</td>
                        <td>{{$demographic->pager_number}}</td>
                        <td>{{$demographic->address}}, {{$demographic->city}}, {{$demographic->state}} {{$demographic->zip}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script src="{{ asset('js/tablesort.js') }}"></script>
@endpush


@endsection