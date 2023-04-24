<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PgyLevel;
use App\Models\Specialty;
use App\Models\User;
use App\Models\Demographic;
use App\Models\AccessLevel;

class NewResidentController extends Controller
{
    public function index() {
        $pgyLevels = PgyLevel::all();
        $specialties = Specialty::all();

        return view('new.index', [
            'pgyLevels' => $pgyLevels,
            'specialties' => $specialties
        ]);
    }

    public function create(Request $request) {
        //Specify the rules to validate user input.
        $request->validate([
            'firstName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'birthday' => 'required',
            'email' => 'required|unique:App\Models\User,email',
            'specialty' => 'required',
            'pgyLevel' => 'required'
        ]);

        //Insert data into database.
        $newUser = new User([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'password' => bcrypt('password'), //User updates later.
            'access_level_id' => AccessLevel::where('access', 'User')->first()->id,
        ]);
        $newUser->save();

        $newDemographic = new Demographic([
            'birth_date' => $request->input('birthday') ? $request->input('birthday') : '',
            'sex' => $request->input('sex') ? $request->input('sex') : '',
            'address' => $request->input('address') ? $request->input('address') : '',
            'city' => $request->input('city') ? $request->input('city') : '',
            'state' => $request->input('state') ? $request->input('state') : '',
            'zip' => $request->input('zip') ? $request->input('zip') : '',
            'phone_number' => $request->input('phone_number') ? $request->input('phone_number') : '',
            'npi_number' => $request->input('npi_number') ? $request->input('npi_number') : '',
            'pager_number' => $request->input('pager_number') ? $request->input('pager_number') : '',
            'pgy_level_id' => $request->input('pgyLevel'),
            'specialty_id' => $request->input('specialty'),
            'user_id' => $newUser->id,
        ]);
        $newDemographic->save();

        //Redirect user.
        return redirect()
            ->route('profile.all')
            ->with('success', "Sucessfully created new profile.");
    }
}
