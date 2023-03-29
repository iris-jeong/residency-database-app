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
        <li class="current"><a href="#Admin" title="Admin Members">Admin Members</a></li>
        <li><a href="#requirements" title="Requirements">Requirements</a></li>
    </ul>
</div>

<hr>


<div class="tabcontent" id="Admin">
	<p id="add"> Add new admin user</p>

		<div id="box" class= "d-flex">
			<input id="admin-input" class="form-control" type="text" placeholder="example@usc.edu">
			<button  class="ms-3" id="button"type="button"> Add Admin</button>
		</div>
		<hr>

	<p> Admin Users <span id="admin-count">(7 users)</span></p>

	<ul id="admin-users">
		<li class="d-flex justify-content-between align-items-center">
			<div id="admin-wh" class="d-flex align-items-center">
				<div class="admin-pic"></div>
				<div class="admin-info">
					<p class="admin-name">Hannah Abott</p>
					<p class="admin-email">habbott@usc.edu</p>
				</div>
			</div>

			<div>
				<button class="btn  btn-outline-danger" type="button">Remove</button>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div id="admin-wh" class="d-flex align-items-center">
				<div class="admin-pic"></div>
				<div class="admin-info">
					<p class="admin-name">Ludo Bagman</p>
					<p class="admin-email">lbagman@usc.edu</p>
				</div>
			</div>

			<div>
				<button class="btn  btn-outline-danger" type="button">Remove</button>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div id="admin-wh" class="d-flex align-items-center">
				<div class="admin-pic"></div>
				<div class="admin-info">
					<p class="admin-name">Katie Bell</p>
					<p class="admin-email">kbell@usc.edu</p>
				</div>
			</div>

			<div>
				<button class="btn  btn-outline-danger" type="button">Remove</button>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div id="admin-wh" class="d-flex align-items-center">
				<div class="admin-pic"></div>
				<div class="admin-info">
					<p class="admin-name">Sirius Black</p>
					<p class="admin-email">sblack@usc.edu</p>
				</div>
			</div>

			<div>
				<button class="btn  btn-outline-danger" type="button">Remove</button>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div id="admin-wh" class="d-flex align-items-center">
				<div class="admin-pic"></div>
				<div class="admin-info">
					<p class="admin-name">Charity Burbage</p>
					<p class="admin-email">cburbage@usc.edu</p>
				</div>
			</div>

			<div>
				<button class="btn  btn-outline-danger" type="button">Remove</button>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div id="admin-wh" class="d-flex align-items-center">
				<div class="admin-pic"></div>
				<div class="admin-info">
					<p class="admin-name">Cho Chang</p>
					<p class="admin-email">cchange@usc.edu</p>
				</div>
			</div>

			<div>
				<button class="btn  btn-outline-danger" type="button">Remove</button>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div id="admin-wh" class="d-flex align-items-center">
				<div class="admin-pic"></div>
				<div class="admin-info">
					<p class="admin-name">Vincent Crabbe</p>
					<p class="admin-email">vcrabbe@usc.edu</p>
				</div>
			</div>

			<div>
				<button class="btn  btn-outline-danger" type="button">Remove</button>
			</div>
		</li>
	</ul>


	
	

</div><!--#Admin-->


<div class="tabcontent" id="requirements">

<div>
	<p id="every">Everyone</p>
	<p id="req-text">All residents and fellows are required to have these documents and licenses.</p>
</div>

<p id="req-doc">Document Name</p>
	<ul id="admin-users">
		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">ACLS License</p>
				</div>
			</div>

			<div class="">
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">ATLS License</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">BLS License</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">CV</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Driver's License</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Demographics</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">ERAS Applicatio</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Immunization Records</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">NPI Numbers</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Medical School Diploma</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Medical Records</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Postgraduate Trainee License</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Socal Security Card</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div class="doc-info">
					<p class="doc-name">Sick Buy Back Form</p>
				</div>
			</div>

			<div>
				<i class="fa-light fa-file-pen"></i>
				<i class="fa-regular fa-trash-can"></i>
			</div>
		</li>

		<li class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<i class="fa-regular fa-plus"></i>
				<div  class="doc-info">
					<p id="new-req">Add new requirement</p>
				</div>
			</div>
		</li>


		
	</ul>

</div><!--#requirments"-->


</div><!--#settings-container-->

@push('scripts')
<script src="{{ asset('js/settings.js') }}"></script>
@endpush
@endsection