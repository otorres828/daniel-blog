<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

   
    public function create()
    {
        $category = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.post.create', compact('category', 'tags'));
    }

   
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());

        if($request->file('file')){
            // $url=Storage::put('posts',$request->file('file'));
            $url= $request->file('file')->store('public/posts');
            $post->image()->create([
                'url'=>$url
            ]);
        }

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('post.index',)->with('info', 'el post se creo con exito');
    }

    
      public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $category = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.post.edit', compact('post','category','tags'));
    }

    public function update(Request $request, Post $post)
    { 

        $post->update($request->all());   

        if($request->file('file')){
             $url= $request->file('file')->store('public/posts');
             if($post->image){ 
                Storage::delete($post->image->url);
                $post->image->update([
                    'url'=>$url
                ]);
            }else{
                $post->image()->create([
                    'url'=>$url
                ]);
            }
        }
        return redirect()->route('post.index', compact('post'))->with('info', 'El post se actualizó con exito');
    }

   
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index',)->with('delete', 'el post se eliminó con exito');

    }
}
