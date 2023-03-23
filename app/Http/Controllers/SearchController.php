<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index() {
        return view('search.index');
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
