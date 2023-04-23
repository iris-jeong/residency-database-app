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

    public function createBroadcast(Request $request){

        //Specify the rules to validate user input.
        $request->validate([
            'to' => 'required|string|max:100',
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:200',
            'count' => 'required_without:autoSwitch',
            'period' => 'required_without:autoSwitch',
            'start_from' => 'required_without:autoSwitch',
            'message' => 'required|string|max:200'
        ]);

        //Once validated, insert the data into the database.
        $newBroadcast = new Broadcasts([
            'to' => $request->input('to'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'freq_auto' => $request->input('autoSwitch'),
            'freq_count' => $request->input('count'),
            'freq_period_id' => $request->input('period'),
            'freq_start_id' => $request->input('start_from'),
            'message' => $request->input('message'),
            'format_id' => $request->input('send'),
        ]);
        $newBroadcast->save();

        //Redirect the user back to the 'Admin Members' tab.
        return redirect()
            ->route('broadcast.automated-alerts')
            ->with('success', "Successfully added automated broadcast for \"{$request->input('title')}\".");
    }
}
