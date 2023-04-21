<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showRequirements() {
        return view('profile.requirements');
    }
    
    public function showAll() {
        return view('profile.all');
    }

    public function index() {
        return view('profile.index');
    }
}
