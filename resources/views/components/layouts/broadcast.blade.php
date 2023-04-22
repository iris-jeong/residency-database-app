@extends('layouts.main')
@section('title', 'Broadcast')

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/broadcast.css') }}">
@endpush

@section('content')
    <h1>Broadcast</h1>
    <div class="broadcast-container">
		<x-tabmenu.tabs>
			<x-tabmenu.tab title="Custom Message" route="broadcast.custom-message">Custom Message</x-tabmenu.tab>
			<x-tabmenu.tab title="Automated Alerts" route="broadcast.automated-alerts">Automated Alerts</x-tabmenu.tab>
		</x-tabmenu.tabs>

		<hr class="mb-3">

		<div class="tabcontent" {{ $attributes }}>
			{{ $slot }}
		</div>
	</div><!--#settings-container-->
    @push('scripts')
    <script src="{{ asset('js/broadcast.js') }}"></script>
    @endpush
@endsection