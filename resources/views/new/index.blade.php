@extends('layouts.main')
@section('title', 'Add New Resident')

@section('content')
<div class="new-resident-container mb-5">
		<h1>Create Resident Profile</h1>

		<div class="name d-flex mt-4">
			<div class="me-3">
				<label for="firstname" class="form-label">First Name: <span class="asterisk">*</span> </label>
				<input type="text" name="firstname" placeholder="Tommy" id="firstname" class="form-control">
			</div>
			<div>
				<label for="lastname"class="form-label">Last Name: <span class="asterisk">*</span> </label>
				<input type="text" class="form-control" name="lastname" placeholder="Trojan" id="lastname">
			</div>
		</div>

		<br>

		<div class= "birthdate w-25">
			<label for="birthday" class="form-label">Birthdate:<span class="asterisk">*</span> </label>
			<input type="date" class="form-control" name="birthday" id="birthday">
		</div>

		<br>

		
		<div class="sex">
			<p class="mb-2">Sex:<span class="asterisk">*</p>
			<div class="mt-1">
				<div class="form-check form-check-inline"> 
					<input class="form-check-input" id="male" type="radio" name="sex" value ="Male">
					<label class="form-check-label" for="male">Male</label>
				</div>
				<div class="form-check form-check-inline"> 
					<input class="form-check-input" id="female" type="radio" name="sex" value ="Female">
					<label class="form-check-label" for="female">Female</label>
				</div>
			</div>
		</div>

		<br>

		<div class= "contactInfo d-flex">
			<div class="me-3">
				<label class="form-label" for="email" >Email: <span class="asterisk">*</span></label>
				<input class="form-control" type="text" name = "email" placeholder="ttrojan@usc.edu" id="email">
			</div>
			<div>	
				<label class="form-label" for="phone">Phone:<span class="asterisk">*</span></label>
				<input class="form-control" type="phone" name = "phone" placeholder="123-123-1234" id="phone">
			</div>
		</div>

		<br>

		<div class= "address">
			<label for="address" class="form-label">Address: <span class="asterisk">*</span></label>
			<input class="form-control mb-3" type="text" name = "address" placeholder="Street address line 1" id="address">

			<!-- <label for="address" > -->
			<input class="form-control" type="text" name = "address" placeholder="Street address line 2" id="address">
		</div>

		<br>

		<div class= "otherInfo d-flex">
			<div class= "City me-3">
				<label class="form-label" for="city" >City: <span class="asterisk">*</span></label>
				<input class="form-control" type="text" name = "City"  id="city">
			</div>

			<div class="state me-3">	
				<label class="form-label" for="state">State:</label>
				<select class="form-select">
					<option value="0"></option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
			</div>

			<div class= "zip">
				<label for="zip" class="form-label" >Zip: <span class="asterisk">*</span></label>
				<input class="form-control" type="text" name = "zip"  id="zip">
			</div>
		</div>

		<br>

		<div class= "medicalInfo d-flex">
			<div class="specialty me-3">	
				<label class="form-label" for="Specialty" >Specialty: <span class="asterisk">*</span></label>
				<select class="form-select">
					<option value="0"></option>
					<option value="AT">Abdominal Transplant</option>
					<option value="AG">Advanced GI MIS</option>
					<option value="B">Breast</option>
					<option value="C">Cardiothoracic</option>
					<option value="CR">Colorectal</option>
					<option value="GS">General Surgery</option>
					<option value="H">Hepatobiliary</option>
					<option value="P">Plastics and Reconstructive Surgery</option>
					<option value="S">Surgical Critical Care</option>
					<option value="T">Trauma</option>
					<option value="V">Vascular</option>
				</select>
			</div>

			<div class="level">	
				<label for="level" class="form-label">PGY Level: <span class="asterisk">*</span></label>
				<select class="form-select">
					<option value="0"></option>
					<option value="1">PGY 1</option>
					<option value="2">PGY 2</option>
					<option value="3">PGY 3</option>
					<option value="4">PGY 4</option>
					<option value="5">PGY 5</option>
					<option value="6">PGY 6</option>
					<option value="7">PGY 7</option>
				</select>
			</div>
		</div>

		<br>

		<div class= "medicalID d-flex">
			<div class="me-3">
				<label for="NPI" class="form-label">NPI #: <span class="asterisk">*</span></label>
				<input class="form-control" type="text" name = "NPI"  id="NPI">
			</div>
			<div>
				<label class="form-label" for="pager" >Pager #: <span class="asterisk">*</span></label>
				<input class="form-control" type="text" name = "Pager"  id="Pager">	
			</div>
		</div>

		<br>

		<div class= "confirmation d-flex justify-content-between">
			<button class="btn button1">Cancel</button>

			<button class="btn button2">Create profile</button>

		</div>
	</div>
@endsection
