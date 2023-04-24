<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Requirement;

class ProfileController extends Controller
{
    public function showRequirements($id) {
        $user = User::with([
            'demographic',
            'demographic.pgyLevel',
            'demographic.specialty', 
            'licenses',
        ])->findOrFail($id);

        $requirements = Requirement::all();
        
        return view('profile.requirements', [
            'id' => $id,
            'user' => $user,
            'requirements' => $requirements,
        ]);
    }
    
    public function showAll($id) {
        return view('profile.all');
    }

    public function index() {
        return view('profile.index');
    }
}
