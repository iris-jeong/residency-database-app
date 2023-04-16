@extends('layouts.main')
@section('title', 'Settings')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
@endpush
@section('content')
<h1>Settings</h1>

<div id="settings-container">

	<x-tabmenu.tabs>
		<x-tabmenu.tab title="Admin Members" route="settings.admins">Admin Members</x-tabmenu.tab>
		<x-tabmenu.tab title="Requirements" route="settings.requirements">Requirements</x-tabmenu.tab>
	</x-tabmenu.tabs>

	<hr>

	<div class="tabcontent" {{ $attributes }}>
		{{ $slot }}
	</div>
</div><!--#settings-container-->

@endsection
