<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryInlineEditing extends Component
{
    use WithPagination;

    public $categoryEditing;

    protected $rules = [
        'categoryEditing.name' => 'required|string',
    ];

    public function edit($id)
    {
        $this->categoryEditing = Category::find($id);
    }

    public function save()
    {
        $this->validate();

        $this->categoryEditing->save();

        $this->reset();
    }

    public function render()
    {
        return view('livewire.category-inline-editing', ['categories' => Category::paginate(20)]);
    }
}
