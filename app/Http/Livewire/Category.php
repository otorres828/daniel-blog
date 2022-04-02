<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    public $category, $buscar;
 
    public function mount($category)
    {
        $this->category = $category;
    }
    public function render()
    {
        $posts = Post::where('category_id', $this->category->id)
                        ->where('status', 2)
                        ->where('name','LIKE','%'.$this->buscar.'%')
                        ->latest('id')
                        ->paginate(6);
        return view('livewire.category',['category'=>$this->category,
                                         'posts'=>$posts]);
    }
}
