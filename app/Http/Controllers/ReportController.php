<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demographic;

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

        //Write query to retrieve the demographic information of the users for the report.
        $demographicsQuery = Demographic::with('user', 'pgyLevel', 'specialty');

        //Add name to the query.
        if($name) {
            $users = User::where(function ($query) use ($name) {
                $query->where('first_name', 'like', '%' . strtolower($name) . '%')
                    ->orWhere('last_name', 'like', '%' . strtolower($name) . '%');
            })->get();
            $demographicsQuery->whereIn('user_id', $users->pluck('id'));
        }
        //Add specialties to the query.
        if($specialties) {
            $demographicsQuery->whereIn('specialty_id', $specialties);
        }
        //Add PGY level to the query.
        if($pgyLevel) {
            $demographicsQuery->whereIn('pgy_level_id', $pgyLevel);
        }
        //Add licenses to the query.
        if($licenses) {
            $demographicsQuery->whereIn('license_id', $license);

        }
        $demographics =  $demographicsQuery->get();

        //Retrieve the type of report.
        $reportType = ucfirst($request->input('runreportsradio'));
        
        //Columns for the demographic report table.
        if($reportType ===  'Demographic') {
            $columns = ['Email', 'Phone', 'NPI #', 'Pager #', 'Address'];
        }

        return view('search.report', [
            'columns' => $columns,
            'demographics' => $demographics,
            'reportType' => $reportType,
        ]);

        return response()->json($demographics);
    }
}
