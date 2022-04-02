<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag as ModelsTag;
use Livewire\Component;
use Livewire\WithPagination;

class Tag extends Component
{
    use WithPagination;
    public $tag;
    public function mount(ModelsTag $tag){
        $this->tag = $tag;
    }
    public function render()
    {
        $posts = $this->tag->posts()
                            ->where('status','=',2)
                            ->latest('id')
                            ->paginate(8);
        return view('livewire.tag', ['tag' => $this->tag, 
                                    'posts'=> $posts
                                    ]);
    }
}
