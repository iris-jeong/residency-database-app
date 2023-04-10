@extends('layouts.main')
@section('title', 'Settings')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
@endpush
@section('content')
<h1>Settings</h1>

<div id="settings-container">

	<div id="tabs">
		<ul class="tab-menu d-flex justify-content-evenly mt-3">
			<li class="current">
				<a href="#Admin" title="Admin Members">Admin Members</a>
			</li>
			<li>
				<a href="#requirements" title="Requirements">Requirements</a>
			</li>
		</ul>
	</div><!-- #tabs -->

	<hr>

	<div class="tabcontent" id="Admin">
		<p id="add"> Add new admin user</p>

		<div id="box" class= "d-flex">
			<input id="admin-input" class="form-control" type="text" placeholder="example@usc.edu">
			<button  class="ms-3" id="button"type="button"> Add Admin</button>
		</div>
		
		<hr>

		<p> Admin Users <span id="admin-count">({{$numAdmins}} users)</span></p>

		<ul id="admin-users">
			@foreach( $admins as $admin ) 
				<li class="d-flex justify-content-between align-items-center">
					<div id="admin-wh" class="d-flex align-items-center">
						<div class="admin-pic"></div>
						<div class="admin-info">
							<p class="admin-name">{{$admin->first_name}} {{$admin->last_name}}</p>
							<p class="admin-email">{{$admin->email}}</p>
						</div>
					</div>

					<div>
						<button class="btn  btn-outline-danger" type="button">Remove</button>
					</div>
				</li>		
			@endforeach
		</ul>
	</div><!--#Admin-->


	<div class="tabcontent" id="requirements">
		<div>
			<p id="every">Everyone</p>
			<p id="req-text">All residents and fellows are required to have these documents and licenses.</p>
		</div>

		<p id="req-doc">Document Name</p>
		<ul id="admin-users">
			@foreach( $requiredDocs as $doc) 
				<li class="d-flex justify-content-between align-items-center">
					<div class="d-flex align-items-center">
						<div class="doc-info">
							<p class="doc-name">{{$doc->required_doc}}</p>
						</div>
					</div>

					<div class="">
						<i class="fa-light fa-file-pen"></i>
						<i class="fa-regular fa-trash-can"></i>
					</div>
				</li>
			@endforeach
		</ul>
	</div><!--#requirements"-->


</div><!--#settings-container-->

@push('scripts')
<script src="{{ asset('js/settings.js') }}"></script>
@endpush
@endsection