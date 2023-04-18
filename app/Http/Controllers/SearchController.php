<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demographic;
use App\Models\AccessLevel;
use App\Models\License;
use App\Models\PgyLevel;
use App\Models\Specialty;
use Illuminate\Support\Arr;

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

    public function filteredSearch(Request $request) {
        // No need for validation (or maybe validate the name if there is some user input and only alphabetical letters are used?)
        // Gets the values from the input fields and dropdowns
        $name = trim($request->input('searchinput'));
        $specialty = $request->input('specialty-dropdown');
        $pgyLevel = $request->input('pgy-dropdown');
        $request->flash();
        // $license = $request->input('license-dropdown');

        // Checks for any filters to use where clause. Otherwise, get all.
        if(!empty($name) | !empty($pgyLevel) || !empty($specialty) || !empty($license)){
            // New array, add filters to array if not empty 
            $filters = [];
            // if(!empty($name)){
            //     $filters = Arr::add($filters, 'pgy_level_id', $name);
            // }
            if(!empty($pgyLevel)){
                $filters = Arr::add($filters, 'pgy_level_id', $pgyLevel);
            }
            if(!empty($specialty)){
                $filters = Arr::add($filters, 'specialty_id', $specialty);
            }
            // if(!empty($license)){
            //     $filters = Arr::add($filters, 'license_id', $pgyLevel);
            // }
            $demographics = Demographic::select('user_id', 'pgy_level_id', 'specialty_id', 'phone_number')
                                ->where($filters)->get();
        }
        else{
            $demographics = Demographic::select('user_id', 'pgy_level_id', 'specialty_id', 'phone_number')->get();
        }
        
        $pgyLevels = PgyLevel::all();
        $specialties = Specialty::all();
        $licenses = License::all();

        //Retrieve the number of users.
        $demographicsCount = count($demographics);

        //Redirect the user back to the 'Admin Members' tab.
        return view('search.index', [
            'demographicUsers' => $demographics, 
            'numDemographics' => $demographicsCount,
            'licenses' => $licenses,
            'pgyLevels' => $pgyLevels,
            'specialties' => $specialties
        ]);
    }

}
