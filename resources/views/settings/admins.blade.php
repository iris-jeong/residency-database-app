<x-layouts.settings id="admin">
	<div class="content">
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
	</div>
</x-layouts.settings><!--#Admin-->
