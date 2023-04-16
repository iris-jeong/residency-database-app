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
}
