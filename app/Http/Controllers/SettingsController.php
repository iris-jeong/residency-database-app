<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SettingsController extends Controller
{
    public function index() {
        //Retrieve all users that are admins
        $admins = User::where('access_level_id', 2)->get();
        $numAdmins = count($admins);

        return view('settings.index', [
            'admins' => $admins, 
            'numAdmins' => $numAdmins
        ]);
    }
}
