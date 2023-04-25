<?php

namespace App\Http\Controllers;

use App\Models\BroadcastFormat;
use App\Models\Broadcasts;
use App\Models\FrequencyPeriod;
use App\Models\FrequencyStartFrom;
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
        $broadcast = Broadcasts::latest()->first();

        return view('broadcast.automated-alerts', ['broadcasts' => $automated_broadcasts, 'broadcastSelected' => $broadcast]);
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

    public function editBroadcast(Request $request){

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
        $id = $request->input('id');
        $broadcast = Broadcasts::find($id);

        if(!$broadcast) {
            return redirect()
                ->route('broadcast.automated-alerts')
                ->with('error', 'Broadcast not found.');
        }

        $broadcast->to = $request->input('to');
        $broadcast->title = $request->input('title');
        $broadcast->description = $request->input('description');
        $broadcast->freq_auto = $request->input('autoSwitch');
        $broadcast->freq_count = $request->input('count');
        $broadcast->freqPeriod->id = $request->input('period');
        $broadcast->freqStartFrom->id = $request->input('start_from');
        $broadcast->message = $request->input('message');
        $broadcast->broadcastFormat->id =$request->input('send');
        $broadcast->update();

        //Redirect the user back to the 'Admin Members' tab.
        return redirect()
            ->route('broadcast.automated-alerts')
            ->with('success', "Successfully updated automated broadcast for \"{$request->input('title')}\".");
    }

    public function deleteBroadcast($id) {
        //Retrieve the broadcast.
        $broadcast = Broadcasts::find($id);

        //Validate to make sure correct id retreived
        if(!$broadcast) {
            return redirect()
                ->route('broadcast.automated-alerts')
                ->with('error', 'Broadcast not found.');
        }

        //Delete the requirement.
        $broadcast->delete();
        
        //Redirect.
        return redirect()
            ->route('broadcast.automated-alerts')
            ->with('success', "Successfully deleted the '{$broadcast->title}' automated broadcast.");
    }

    public function showEditBroadcastPage(Request $request){
        //Retrieve the broadcast.
        $id=$request->input('id');
        $broadcast = Broadcasts::find($id);

        //Validate to make sure correct id retreived
        if(!$broadcast) {
            return redirect()
                ->route('broadcast.automated-alerts')
                ->with('error', 'Broadcast not found.');
        }

        $frequencyPeriods = FrequencyPeriod::all();
        $frequencyStarts = FrequencyStartFrom::all();
        $formats = BroadcastFormat::all();
        return view('broadcast.edit-broadcast', [
            'broadcast' => $broadcast,
            'freqPeriods' => $frequencyPeriods,
            'freqStarts' => $frequencyStarts,
            'formats' => $formats
        ]);

        // return redirect()
        //     ->route('broadcast.automated-alerts')->with('broadcastSelected', $broadcast);
    }
}
