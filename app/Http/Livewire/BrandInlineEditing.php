<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class BrandInlineEditing extends Component
{
    use WithPagination;

    public $brandEditing;

    protected $rules = [
        'brandEditing.name' => 'required|string',
    ];

    public function edit($id)
    {
        $this->brandEditing = Brand::find($id);
    }

    public function save()
    {
        $this->validate();

        $this->brandEditing->save();

        $this->reset();
    }

    public function render()
    {
        return view('livewire.brand-inline-editing', ['brands' => Brand::paginate(20)]);
    }
}
