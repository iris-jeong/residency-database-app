<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Requirement;
use App\Models\UserLicense;

class ProfileController extends Controller
{
    public function showRequirements($id) {
        $user = User::with([
            'demographic',
            'demographic.pgyLevel',
            'demographic.specialty', 
            'userLicenses.license',
            'userLicenses.file',
            'files'
        ])->findOrFail($id);
        // return $user;
        // return $user->demographic->pgyLevel->level;
        // return $user->files;
        
        $requirements = Requirement::all();

        return view('profile.index', [
            'id' => $id,
            'user' => $user,
            'requirements' => $requirements,
        ]);
    }
    
    public function showAll($id) {
        $user = User::with([
            'demographic',
            'demographic.pgyLevel',
            'demographic.specialty', 
            'userLicenses.license',
            'userLicenses.file',
            'files'
        ])->findOrFail($id);
        return view('profile.index', [
            'id' => $id,
            'user' => $user,
        ]);
    }

    public function index() {
        return view('profile.index');
    }
}
