<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demographic;
use App\Models\UserTest;
use App\Models\UserLicense;

class ReportController extends Controller
{
    public function show(Request $request) {
        //Retrieve the search page's query string.
        $queryString = $request->input('queryString');

        //Parse it.
        parse_str($queryString, $filters);

        $name = isset($filters['searchinput']) ? $filters['searchinput'] : null;
        $specialties = isset($filters['selected_specialties']) ? $filters['selected_specialties'] : null;
        $pgyLevel = isset($filters['selected_pgy']) ? $filters['selected_pgy'] : null;
        $licenses = isset($filters['selected_license']) ? $filters['selected_license'] : null;

        //Write queries to retrieve information for the reports.
        $usersQuery = User::join('demographics', 'users.id', '=', 'demographics.user_id')
            ->with('tests', 'licenses', 'files', 'demographic', 'demographic.pgyLevel', 'userLicenses');

        //Add name to the query.
        if($name) {
            $users = User::where(function ($query) use ($name) {
                $query->where('first_name', 'like', '%' . strtolower($name) . '%')
                    ->orWhere('last_name', 'like', '%' . strtolower($name) . '%');
            })->get();
            $usersQuery->whereIn('users.id', $users->pluck('id'));
        }
        //Add specialties to the query.
        if($specialties) {
            $usersQuery->whereIn('demographics.specialty_id', $specialties);
        }
        //Add PGY level to the query.
        if($pgyLevel) {
            $usersQuery->whereIn('demographics.pgy_level_id', $pgyLevel);
        }
        //Add licenses to the query.
        if($licenses) {
            foreach ($licenses as $index => $license) {
                $alias = 'ul' . ($index + 1);
                $usersQuery->join('user_license AS ' . $alias, function($join) use ($license, $alias) {
                    $join->on('users.id', '=', $alias . '.user_id')
                    ->where($alias . '.license_id', '=', $license);
                });
            }
        }
        $users = $usersQuery->select('users.*')->distinct('users.id')->get();
        $numUsers = count($users);

        //Retrieve the type of report.
        $reportType = ucfirst($request->input('runreportsradio'));
        
        //Columns for the demographic report table.
        if($reportType ===  'Demographic') {
            $columns = ['Email', 'Phone', 'NPI #', 'Pager #', 'Address'];
        }
        else if($reportType === 'Test') {
            $columns = ['Test', 'Score'];
        } else {
            $columns = ['ACLS', 'ATLS', 'BLS', 'CML', 'DEA', 'FCCS', ''];
        }

        return view('search.report', [
            'columns' => $columns,
            'users' => $users,
            'numUsers' => $numUsers,
            'reportType' => $reportType,
        ]);
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
