<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AccessLevel;

class SettingsController extends Controller
{
    public function index() {
        //Retrieve all users that have admin access.
        // $admins = User::where('access_level_id', $adminId)->get();

        $adminUsers = User::whereHas('accessLevel', function ($query) {
            $query->where('access', 'Admin');
        })->get();

        //Retrieve the number of admin users.
        $numAdmins = count($adminUsers);

        return view('settings.index', [
            'admins' => $adminUsers, 
            'numAdmins' => $numAdmins
        ]);
    }
}
