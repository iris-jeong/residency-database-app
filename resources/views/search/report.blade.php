@extends('layouts.main')
@section('title', $reportType . ' Report')

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
            {{-- <button type="button" class="btn btn-sm btn-outline-dark" disabled>Cardiothoracic</button> --}}
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
                @foreach($users as $user)
                    <tr>
                        <td><input class="form-check-input" type="checkbox" value="" id="select"></td>
                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                        <td><span class="level {{ str_replace(' ', '', $user->demographic->pgyLevel->level) }} badge rounded-pill">{{$user->demographic->pgyLevel->level}}</span></td>
                        
                        @if ($reportType === 'Demographic')
                            <td><u>{{$user->demographic->email}}</u></td>
                            <td>{{$user->demographic->phone_number}}</td>
                            <td>{{$user->demographic->npi_number}}</td>
                            <td>{{$user->demographic->pager_number}}</td>
                            <td>{{$user->demographic->address}}, {{$user->demographic->city}}, {{$user->demographic->state}} {{$user->demographic->zip}}</td>
                       
                        @elseif ($reportType === 'Test')
                            <td><u>{{$user->tests->first()->name}}</u></td>
                            <td>{{$user->tests->first()->pivot->score}}</td>
                        @else
                            <td>1/3/21</td>
                            <td>1/3/22</td>
                            <td>2/05/18</td>
                            <td>2/05/18</td>
                            <td>2/05/18</td>
                            <td>2/05/18</td>
                            <td><div class="status status-good"></div></td>
                        @endif
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