<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class Show extends Component
{
    public $post;
    public function __construct(Post $post)
    {
        $this->post=$post;
    }

  
    public function render()
    {
        
        return view('layouts.show');
    }
}
