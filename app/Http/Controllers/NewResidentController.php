<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PgyLevel;
use App\Models\Specialty;

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

        //Redirect user.
        return redirect()
            ->route('profile.index')
            ->with('success', "Sucessfully created new profile.");
    }
}
