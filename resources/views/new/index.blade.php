@extends('layouts.main')
@section('title', 'Add New Resident')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/newresident.css') }}">
@endpush
@section('content')
<div class="new-resident-container mb-5">
		<h1>Create Resident Profile</h1>
		<form method="POST" action="{{ route('new.create') }}">
			@csrf
			<div class="name d-flex mt-4">
				<div class="me-3">
					<label for="firstName" class="form-label">First Name: <span class="asterisk">*</span> </label>
					<input type="text" name="firstName" placeholder="Tommy" id="firstName" class="form-control" value="{{ old('firstName') }}">
					@error("firstName")
                		<small class="text-danger">{{$message}}</small>
            		@enderror
				</div>
				<div>
					<label for="lastName"class="form-label">Last Name: <span class="asterisk">*</span> </label>
					<input type="text" class="form-control" name="lastName" placeholder="Trojan" id="lastName" value="{{ old('lastName') }}">
					@error("lastName")
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>

			<br>

			<div class= "birthdate w-25">
				<label for="birthday" class="form-label">Birthdate:<span class="asterisk">*</span> </label>
				<input type="date" class="form-control" name="birthday" id="birthday" value="{{ old('birthday') }}">
			</div>

			<br>

			<div class="sex">
				<p class="mb-2">Sex:</p>
				<div class="mt-1">
					<div class="form-check form-check-inline"> 
						<input class="form-check-input" id="male" type="radio" name="sex" value ="male" {{ old('sex') == 'male' ? 'checked' : ''}}>
						<label class="form-check-label" for="male">Male</label>
					</div>
					<div class="form-check form-check-inline"> 
						<input class="form-check-input" id="female" type="radio" name="sex" value="female" {{ old('sex') == 'female' ? 'checked' : '' }}>
						<label class="form-check-label" for="female">Female</label>
					</div>
				</div>
			</div>

			<br>

			<div class= "contactInfo d-flex">
				<div class="me-3">
					<label class="form-label" for="email" >Email: <span class="asterisk">*</span></label>
					<input class="form-control" type="text" name="email" placeholder="ttrojan@usc.edu" id="email" value="{{ old('email') }}">
					@error("email")
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
				<div>	
					<label class="form-label" for="phone">Phone:</span></label>
					<input class="form-control" type="phone" name="phone" placeholder="123-123-1234" id="phone" value="{{ old('phone') }}">
				</div>
			</div>

			<br>

			<div class= "address">
				<label for="address" class="form-label">Address:</label>
				<input class="form-control w-75" type="text" name="address" placeholder="Street address" id="address" value="{{ old('address') }}">
			</div>

			<br>

			<div class= "otherInfo d-flex">
				<div class= "City me-3">
					<label class="form-label" for="city" >City:</label>
					<input class="form-control" type="text" name="city" id="city" value="{{ old('city') }}">
				</div>

				<div class="state me-3">	
					<label class="form-label" for="state">State:</label>
					<select class="form-select" name="state">
						<option value="0"></option>
						<option value="AL" {{ old('state') == 'AL' ? 'selected' : '' }}>Alabama</option>
						<option value="AK" {{ old('state') == 'AK' ? 'selected' : '' }}>Alaska</option>
						<option value="AZ" {{ old('state') == 'AZ' ? 'selected' : '' }}>Arizona</option>
						<option value="AR" {{ old('state') == 'AR' ? 'selected' : '' }}>Arkansas</option>
						<option value="CA" {{ old('state') == 'CA' ? 'selected' : '' }}>California</option>
						<option value="CO" {{ old('state') == 'CO' ? 'selected' : '' }}>Colorado</option>
						<option value="CT" {{ old('state') == 'CT' ? 'selected' : '' }}>Connecticut</option>
						<option value="DE" {{ old('state') == 'DE' ? 'selected' : '' }}>Delaware</option>
						<option value="DC" {{ old('state') == 'DC' ? 'selected' : '' }}>District Of Columbia</option>
						<option value="FL" {{ old('state') == 'FL' ? 'selected' : '' }}>Florida</option>
						<option value="GA" {{ old('state') == 'GA' ? 'selected' : '' }}>Georgia</option>
						<option value="HI" {{ old('state') == 'HI' ? 'selected' : '' }}>Hawaii</option>
						<option value="ID" {{ old('state') == 'ID' ? 'selected' : '' }}>Idaho</option>
						<option value="IL" {{ old('state') == 'IL' ? 'selected' : '' }}>Illinois</option>
						<option value="IN" {{ old('state') == 'IN' ? 'selected' : '' }}>Indiana</option>
						<option value="IA" {{ old('state') == 'IA' ? 'selected' : '' }}>Iowa</option>
						<option value="KS" {{ old('state') == 'KS' ? 'selected' : '' }}>Kansas</option>
						<option value="KY" {{ old('state') == 'KY' ? 'selected' : '' }}>Kentucky</option>
						<option value="LA" {{ old('state') == 'LA' ? 'selected' : '' }}>Louisiana</option>
						<option value="ME" {{ old('state') == 'ME' ? 'selected' : '' }}>Maine</option>
						<option value="MD" {{ old('state') == 'MD' ? 'selected' : '' }}>Maryland</option>
						<option value="MA" {{ old('state') == 'MA' ? 'selected' : '' }}>Massachusetts</option>
						<option value="MI" {{ old('state') == 'MI' ? 'selected' : '' }}>Michigan</option>
						<option value="MN" {{ old('state') == 'MN' ? 'selected' : '' }}>Minnesota</option>
						<option value="MS" {{ old('state') == 'MS' ? 'selected' : '' }}>Mississippi</option>
						<option value="MO" {{ old('state') == 'MO' ? 'selected' : '' }}>Missouri</option>
						<option value="MT" {{ old('state') == 'MT' ? 'selected' : '' }}>Montana</option>
						<option value="NE" {{ old('state') == 'NE' ? 'selected' : '' }}>Nebraska</option>
						<option value="NV" {{ old('state') == 'NV' ? 'selected' : '' }}>Nevada</option>
						<option value="NH" {{ old('state') == 'NH' ? 'selected' : '' }}>New Hampshire</option>
						<option value="NJ" {{ old('state') == 'NJ' ? 'selected' : '' }}>New Jersey</option>
						<option value="NM" {{ old('state') == 'NM' ? 'selected' : '' }}>New Mexico</option>
						<option value="NY" {{ old('state') == 'NY' ? 'selected' : '' }}>New York</option>
						<option value="NC" {{ old('state') == 'NC' ? 'selected' : '' }}>North Carolina</option>
						<option value="ND" {{ old('state') == 'ND' ? 'selected' : '' }}>North Dakota</option>
						<option value="OH" {{ old('state') == 'OH' ? 'selected' : '' }}>Ohio</option>
						<option value="OK" {{ old('state') == 'OK' ? 'selected' : '' }}>Oklahoma</option>
						<option value="OR" {{ old('state') == 'OR' ? 'selected' : '' }}>Oregon</option>
						<option value="PA" {{ old('state') == 'PA' ? 'selected' : '' }}>Pennsylvania</option>
						<option value="RI" {{ old('state') == 'RI' ? 'selected' : '' }}>Rhode Island</option>
						<option value="SC" {{ old('state') == 'SC' ? 'selected' : '' }}>South Carolina</option>
						<option value="SD" {{ old('state') == 'SD' ? 'selected' : '' }}>South Dakota</option>
						<option value="TN" {{ old('state') == 'TN' ? 'selected' : '' }}>Tennessee</option>
						<option value="TX" {{ old('state') == 'TX' ? 'selected' : '' }}>Texas</option>
						<option value="UT" {{ old('state') == 'UT' ? 'selected' : '' }}>Utah</option>
						<option value="VT" {{ old('state') == 'VT' ? 'selected' : '' }}>Vermont</option>
						<option value="VA" {{ old('state') == 'VA' ? 'selected' : '' }}>Virginia</option>
						<option value="WA" {{ old('state') == 'WA' ? 'selected' : '' }}>Washington</option>
						<option value="WV" {{ old('state') == 'WV' ? 'selected' : '' }}>West Virginia</option>
						<option value="WI" {{ old('state') == 'WI' ? 'selected' : '' }}>Wisconsin</option>
						<option value="WY" {{ old('state') == 'WY' ? 'selected' : '' }}>Wyoming</option>
					</select>
				</div>

				<div class= "zip">
					<label for="zip" class="form-label" >Zip:</label>
					<input class="form-control" type="text" name="zip" id="zip" value="{{ old('zip') }}">
				</div>
			</div>

			<br>

			<div class= "medicalInfo d-flex">
				<div class="specialty me-3">	
					<label class="form-label" for="Specialty" >Specialty: <span class="asterisk">*</span></label>
					<select name="specialty" id="specialty" class="form-select">
						<option value="">-- Specialty --</option>
						@foreach ($specialties as $specialty)
							<option value="{{$specialty->id}}" {{ old('specialty') == $specialty->id ? 'selected' : ''}}>{{$specialty->name}}</option>
						@endforeach
					</select>
					@error("specialty")
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>

				<div class="level">	
					<label for="pgyLevel" class="form-label">PGY Level: <span class="asterisk">*</span></label>
					<select name="pgyLevel" id="pgyLevel" class="form-select">
						<option value="">-- PGY Level --</option>
						@foreach ($pgyLevels as $pgyLevel)
							<option value="{{$pgyLevel->id}}" {{ old('pgyLevel') == $pgyLevel->id ? 'selected' : '' }}>{{$pgyLevel->level}}</option>
						@endforeach 
					</select>
					@error("pgyLevel")
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>

			<br>

			<div class= "medicalID d-flex">
				<div class="me-3">
					<label for="NPI" class="form-label">NPI #:</label>
					<input class="form-control" type="text" name="npiNumber" id="NPI" value="{{ old('npiNumber') }}">
				</div>
				<div>
					<label class="form-label" for="pager" >Pager #:</label>
					<input class="form-control" type="text" name="pagerNumber" id="pager" placeholder="123-123-1234" value="{{ old('pagerNumber')}}">	
				</div>
			</div>

			<br>
			<br>

			<div class= "confirmation d-flex justify-content-between">
				<button type="reset" class="btn button1">Clear</button>
				<form method="POST" action="{{ route('new.create') }}">
					<button type="submit" class="btn button2" id="create-profile">Create profile</button>
				</form>
			</div>
		<form>
	</div>
@endsection
