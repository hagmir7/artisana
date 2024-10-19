<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryMenu extends Component
{
    public function render()
    {
        return view('livewire.category-menu', [
            'categories' => Category::all()
        ]);
    }
}
