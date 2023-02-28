<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewResidentController extends Controller
{
    public function index() {
        return view('new.index');
    }
}
