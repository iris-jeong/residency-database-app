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

        // Add editMode property to each requirement
         foreach ($requiredDocs as $doc) {
             $doc->editMode = false;
         }
    
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

    public function deleteRequirement($requirementId) {
        //Retrieve the requirement.
        $requirement = Requirement::find($requirementId);

        //Validate.
        if(!$requirement) {
            return redirect()
                ->route('settings.requirements')
                ->with('error', 'Requirement not found.');
        }

        //Delete the requirement.
        $requirement->delete();
        
        //Redirect.
        return redirect()
            ->route('settings.requirements')
            ->with('success', "Successfully deleted the '{$requirement->name}' requirement.");
    }

    public function updateRequirement(Request $request, $requirementId) {
        //Validate.
        $request->validate([
            'editedRequirement' => 'required',
        ]);

        //Update the requirement.
        $requirement = Requirement::find($requirementId);
        $requirement->name = $request->input('editedRequirement');

        $requirement->save();

        //Redirect.
        return redirect()
            ->route('settings.requirements')
            ->with('success', "Successfully updated the requirement to '{$requirement->name}'.");
    }
} 