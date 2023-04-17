<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AccessLevel;
use App\Models\Requirement;

class SettingsController extends Controller
{
    public function showAdmins() {
        //Retrieve all users that have admin access.
        $adminUsers = User::whereHas('accessLevel', function ($query) {
            $query->where('access', 'Admin');
        })->get();

        //Retrieve the number of admin users.
        $numAdmins = count($adminUsers);

        return view('settings.admins', [
            'admins' => $adminUsers, 
            'numAdmins' => $numAdmins,
        ]);
    }

    public function showRequirements() {
        //Retrieve all required documents.
        $requiredDocs = Requirement::all();

        return view('settings.requirements', [
            'requiredDocs' => $requiredDocs
        ]);
    }

    public function createAdmin(Request $request) {
        //Specify the rules to validate user input.
        $request->validate([
            'firstName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'email' => 'required|unique:App\Models\User,email',
        ]);

        //Once validated, insert the data into the database.
        $newAdmin = new User([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'password' => bcrypt('password'), //Update UX for this later.
            'access_level_id' => AccessLevel::where('access', 'Admin')->first()->id,
        ]);
        $newAdmin->save();

        //Redirect the user back to the 'Admin Members' tab.
        return redirect()
            ->route('settings.admins')
            ->with('success', "Successfully added {$request->input('firstName')} as an admin.");
    }

    public function removeAdmin(Request $request) {
        //Validate that the user exists in the database.
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        //Delete the user
        $user = User::find($request->input('user_id'));
        User::find($request->input('user_id'))->delete();

        //Redirect.
        return redirect()
            ->route('settings.admins')
            ->with('success', "Successfully removed {$user->first_name} as an admin.");
    }

    public function createRequirement(Request $request) {
        //Validate.
        $request->validate([
            'requirement' => 'required',
        ]);

        //Insert into database.
        $newRequirement = new Requirement([
            'name' => $request->input('requirement'),
        ]);
        $newRequirement->save();
        
        //Redirect.
        return redirect()
            ->route('settings.requirements')
            ->with('success', "Successfully added '{$request->input('requirement')}' as a requirement.");
    }
}
