<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AccessLevel;
use App\Models\Requirement;

class SettingsController extends Controller
{
    public function index() {
        //Retrieve all users that have admin access.
        $adminUsers = User::whereHas('accessLevel', function ($query) {
            $query->where('access', 'Admin');
        })->get();

        //Retrieve all required documents.
        $requiredDocs = Requirement::all();

        //Retrieve the number of admin users.
        $numAdmins = count($adminUsers);

        return view('settings.index', [
            'admins' => $adminUsers, 
            'numAdmins' => $numAdmins,
            'requiredDocs' => $requiredDocs
        ]);
    }
}
