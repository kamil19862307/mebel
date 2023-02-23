<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lines extends Component
{
    public $lines = [
        ["name" => "First line"]
    ];

    protected $rules = [
        'lines.*.name' => 'required',
    ];

    protected $validationAttributes = [
        'lines.*.name' => 'Name',
    ];

    public function delete($index) {
        if(count($this->lines) > 1) {
            unset($this->lines[$index]);
        }

        $this->resetValidation();
    }

    public function add() {
        $this->validate();

        $this->lines[] = ["name" => ""];
    }

    public function render()
    {
        return view('livewire.lines');
    }
}
