<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RunReportController extends Controller
{
    public function report () {
        return view('report.report');
    }
}
