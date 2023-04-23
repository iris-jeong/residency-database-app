@extends('layouts.main')
@section('title', $reportType . ' Report')

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/runreports.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablesort.css') }}">
@endpush

@section('content')
<div id="test-score-header">
    <br>
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
<br>
<div id="test-score-report">
    <div class="description">
        <div class="info">
            <p class="fw-medium info">
                {{$reportType}} Report 
                <span class="info">({{$numUsers}} Results)</span>
            </p>
        </div>
        <div class="info">
            <i class="fa-regular fa-arrow-down-to-bracket info"></i>
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
                        <td>
                            <a href="{{route('profile.index', [ 'id' => $user->id ] )}}">
                                {{$user->first_name}} {{$user->last_name}}
                            </a>
                        </td>
                        {{-- <td>
                            <span class="level {{ str_replace(' ', '', $user->demographic->pgyLevel->level) }} badge rounded-pill">
                                {{$user->demographic->pgyLevel->level}}
                            </span>
                        </td> --}}
                        @if($user->demographic)
    <td><span class="level {{ str_replace(' ', '', $user->demographic->pgyLevel->level) }} badge rounded-pill">{{$user->demographic->pgyLevel->level}}</span></td>
@else
    <td><span class="badge rounded-pill">N/A</span></td>
@endif

                        
                        @if ($reportType === 'Demographic')
                            <td><u>{{$user->email}}</u></td>
                            <td>{{$user->demographic->phone_number}}</td>
                            <td>{{$user->demographic->npi_number}}</td>
                            <td>{{$user->demographic->pager_number}}</td>
                            <td>{{$user->demographic->address}}, {{$user->demographic->city}}, {{$user->demographic->state}} {{$user->demographic->zip}}</td>
                       
                        @elseif ($reportType === 'Test')
                            <td><u>{{$user->tests->first()->name}}</u></td>
                            <td>{{$user->tests->first()->pivot->score}}</td>
                        @else
                            @php
                                $missingLicense = false;
                            @endphp

                            @foreach ($columns as $column)
                                @php
                                    $license = $user->licenses->firstWhere('name', $column);   
                                @endphp
                                @if ($column != '')
                                    @if($license)
                                        <td>
                                            <a href="#">{{$license->pivot->expiration_date}}</a>
                                        </td>
                                    @else
                                        @php
                                            $missingLicense = true;
                                        @endphp
                                        <td></td>
                                    @endif
                                @else
                                    <td>
                                        <div class="status status-{{$missingLicense ? 'bad' : 'good'}}"></div>
                                    </td>
                                @endif
                            @endforeach
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