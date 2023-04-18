<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demographic;
use App\Models\AccessLevel;
use App\Models\License;
use App\Models\PgyLevel;
use App\Models\Specialty;

class SearchController extends Controller
{
    public function index() {
        // $adminUsers = User::all();
        // $demographics = Demographic::all();
        $demographics = Demographic::select('user_id', 'pgy_level_id', 'specialty_id', 'phone_number')->get();
        $pgyLevels = PgyLevel::all();
        $specialties = Specialty::all();
        $licenses = License::all();

        //Retrieve the number of admin users.
        // $numAdmins = count($adminUsers);
        $demographicsCount = count($demographics);

        return view('search.index', [
            'demographicUsers' => $demographics, 
            'numDemographics' => $demographicsCount,
            'licenses' => $licenses,
            'pgyLevels' => $pgyLevels,
            'specialties' => $specialties
        ]);
        // return view('search.index');
    }
    
    public function test () {
        return view('search.report.test');
    }
    public function demographic () {
        return view('search.report.demographic');
    }
    public function license () {
        return view('search.report.license');
    }
}
