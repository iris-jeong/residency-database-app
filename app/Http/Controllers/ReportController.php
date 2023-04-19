<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
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
