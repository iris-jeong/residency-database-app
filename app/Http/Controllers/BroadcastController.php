<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index() {
        return view('broadcast.index');
    }

    public function showCustomMessage() {
        return view('broadcast.custom-message');
    }

    public function showAutomatedAlerts() {
        return view('broadcast.automated-alerts');
    }
}
