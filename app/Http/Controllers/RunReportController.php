<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RunReportController extends Controller
{
    public function test () {
        return view('report.test');
    }
    public function demographic () {
        return view('report.demographic');
    }
    public function license () {
        return view('report.license');
    }
}
