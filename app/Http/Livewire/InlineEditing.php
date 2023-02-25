<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class InlineEditing extends Component
{
    use WithPagination;

    public $colorEditing;

    protected $rules = [
        'colorEditing.name' => 'required|string',
    ];

    public function edit($id)
    {
        $this->colorEditing = Color::find($id);
    }

    public function save()
    {
        $this->validate();

        $this->colorEditing->save();

        $this->reset();
    }

    public function render()
    {
        return view('livewire.inline-editing', ['colors' => Color::paginate(20)]);
    }
}
