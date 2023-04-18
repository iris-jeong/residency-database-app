<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;

class Requirement extends Component
{
    //Receive the parameter.
    public $doc;
    public $editMode;
    protected $rules = [
        'doc.requirement' => 'required|min:1'
    ];

    public function enableEditMode() {
        $this->doc->editMode = !$this->doc->editMode;
    }

    public function disableEditMode() {
        $this->doc->editMode = $this->doc->editMode;
    }

    public function render()
    {
        return view('livewire.settings.requirement', [
            'doc' => $this->doc
        ]);
    }
}

