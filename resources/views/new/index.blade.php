@extends('layouts.main')
@section('title', 'Add New Resident')

@section('content')
<div class="container">
		<h1>Create Resident Profile</h1>

		<br>
		<div class= "name">
			<label for="firstname">First Name: <span class="asterisk">*</span> </label>
			<input type="text" name="firstname" placeholder="Tommy" id="firstname">

			<label for="lastname">Last Name: <span class="asterisk">*</span> </label>
			<input type="text" name="lastname" placeholder="Trojan" id="lastname">
			
		</div>

		<br>

		<div class= "birthdate">
			Birthdate:<span class="asterisk">*</span> 
			<input type="date" name="firstname" placeholder="Tommy" id="firstname">
		</div>

		<br>

		<div class= "sex">
			Sex:<span class="asterisk">*</span> 
			<input type="radio" name="sex" value ="Male">
			<label for="male">Male</label>
			<input type="radio" name="sex" value ="Female">
			<label for="female">Female</label>
		</div>

		<br>

		<div class= "contactInfo">
			<label for="email" >Email: <span class="asterisk">*</span></label>
			<input type="text" name = "email" placeholder="ttrojan@usc.edu" id="email">
			<label for="phone">Phone:<span class="asterisk">*</span></label>
			<input type="phone" name = "phone" placeholder="123-123-1234" id="phone">
		</div>

		<br>

		<div class= "address">
			<label for="address" >Address: <span class="asterisk">*</span></label>
			<input type="text" name = "address" placeholder="Street address line 1" id="address">

			<label for="address" >
			<input type="text" name = "address" placeholder="Street address line 2" id="address">
		</div>

		<br>

		<div class= "otherInfo">
			<div class= "City">
				<label for="city" >City: <span class="asterisk">*</span></label>
				<input type="text" name = "City"  id="city">
			</div>

			<label for="state">State:</label>

			<select>
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

			<div class= "zip">
				<label for="zip" >Zip: <span class="asterisk">*</span></label>
				<input type="text" name = "zip"  id="zip">
			</div>
		</div>

		<br>

		<div class= "medicalInfo">
			<label for="Specialty" >Specialty: <span class="asterisk">*</span></label>
			<select>
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

			<label for="level" >PGY Level: <span class="asterisk">*</span></label>
			<select>
				<option value="1">PGY 1</option>
				<option value="2">PGY 2</option>
				<option value="3">PGY 3</option>
				<option value="4">PGY 4</option>
				<option value="5">PGY 5</option>
				<option value="6">PGY 6</option>
				<option value="7">PGY 7</option>
			</select>
		</div>

		<br>

		<div class= "medicalID">
			<label for="NPI" >NPI #: <span class="asterisk">*</span></label>
				<input type="text" name = "NPI"  id="NPI">

			<label for="pager" >Pager #: <span class="asterisk">*</span></label>
				<input type="text" name = "Pager"  id="Pager">	
		</div>

		<br>

		<div class= "confirmation">
			<button class="button button1">Cancel</button>

			<button class="button button2">Create profile</button>

		</div>
	</div>
@endsection
