<?php

namespace App\Http\Controllers;

use App\Models\Broadcasts;
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
        $automated_broadcasts = Broadcasts::all(); // Gets all the broadcasts in the broadcast table


        return view('broadcast.automated-alerts', ['broadcasts' => $automated_broadcasts]);
    }
}
