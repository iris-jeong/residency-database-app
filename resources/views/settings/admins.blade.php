<x-layouts.settings id="admin">
	<div class="content">
		@if( session('success') )
			<div class="alert alert-success" role="alert">
				{{ session('success') }}
			</div>
		@endif

		<p id="add"> Add new admin user</p>
			
		<form method="POST" action="{{ route('settings.createAdmin') }}" class="d-flex">
			@csrf
			<div class="form-group">
				<label for="firstName">First name</label>
				<input id="firstName" class="name form-control" name="firstName" type="text" value="{{ old('firstName') }}">
				@error("firstName")
                	<small class="text-danger">{{$message}}</small>
            	@enderror
			</div>
			<div class="form-group">
				<label for="lastName">Last name</label>
				<input id="lastName" class="name form-control" name="lastName" type="text" value="{{ old('lastName') }}">
				@error("lastName")
					<small class="text-danger">{{$message}}</small>
				@enderror
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input id="email" class="form-control" type="text" name="email" placeholder="example@usc.edu" value="{{ old('email') }}">
				@error("email")
					<small class="text-danger">{{$message}}</small>
				@enderror
			</div>
			<button type="submit" id="add-btn" class="btn btn-primary h-50 align-self-end"> Add Admin</button>
		</form>
		<br>
		<hr>
		<br>
		<p> Admin Users <span id="admin-count">({{$numAdmins}} users)</span></p>

		<ul id="admin-users">
			@foreach( $admins as $admin ) 
				<li class="d-flex justify-content-between align-items-center">
					<div id="admin-wh" class="d-flex align-items-center ml-3">
						<div class="admin-pic"></div>
						<div class="admin-info">
							<p class="admin-name">{{$admin->first_name}} {{$admin->last_name}}</p>
							<p class="admin-email">{{$admin->email}}</p>
						</div>
					</div>

					<div>
						<button class="btn  btn-outline-danger btn-sm" type="button">Remove</button>
					</div>
				</li>		
			@endforeach
		</ul>
	</div>
</x-layouts.settings><!--#Admin-->
