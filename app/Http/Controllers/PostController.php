<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('posts.index');
    }
    
    public function show(Post $post){
        $posts=Post::take(3)->get();
        return view('posts.show', compact('post','posts'));
    }

    public function category(Category $category){
        return view('posts.category', compact('category'));
    }
    
    public function tag(Tag $tag){
        return view('posts.tag', compact('tag'));
    }
}
