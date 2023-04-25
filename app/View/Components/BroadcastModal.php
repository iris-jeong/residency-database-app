<?php

namespace App\View\Components;

use App\Models\BroadcastFormat;
use App\Models\FrequencyPeriod;
use App\Models\FrequencyStartFrom;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BroadcastModal extends Component
{
    
    public $type;
    public $data;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $data)
    {
        $this->type = $type;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {   
        $frequencyPeriods = FrequencyPeriod::all();
        $frequencyStarts = FrequencyStartFrom::all();
        $formats = BroadcastFormat::all();
        return view('components.broadcast-modal', [
            'freqPeriods' => $frequencyPeriods,
            'freqStarts' => $frequencyStarts,
            'formats' => $formats
        ]);
    }
}
