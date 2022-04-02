<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post as ModelsPost;
use Livewire\Component;
use Livewire\WithPagination;

class Post extends Component
{
    use WithPagination;
    public $buscar,$buscar_por_categoria='todaslascategorias';
    
    public function render()
    {
        $categorias=Category::all();
        if($this->buscar_por_categoria=='todaslascategorias'){
            $posts = ModelsPost::where('status', 2)
                ->where('name','LIKE','%'.$this->buscar.'%')
                ->latest('id')->paginate(8);

        }else{
            $posts = ModelsPost::where('status', 2)
            ->where('name','LIKE','%'.$this->buscar.'%')
            ->where('category_id','=',$this->buscar_por_categoria)
            ->latest('id')->paginate(8);
        }
        return view('livewire.post',compact('posts','categorias'));
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    public function updatingBuscar_por_categoria()
    {
        $this->resetPage();
    }
}
