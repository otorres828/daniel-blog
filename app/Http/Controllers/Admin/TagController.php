<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }

 
    public function create()
    {
        $color = [
            'red' => 'Color Rojo',
            'yellow' => 'Color Amarillo',
        ];
        return view('admin.tag.create', ['color'=>$color]);
    }

    public function store(TagRequest $request)
    {
        $tag = Tag::create($request->all());
        return redirect()->route('tag.edit', compact('tag'))->with('info', 'La etiqueta se creó con exito');
    }

    public function show(Tag $tag)
    {
        return view('admin.tag.show', compact('tag'));
    }

  
    public function edit(Tag $tag)
    {
        $color = [
            'red' => 'Color Rojo',
            'yellow' => 'Color Amarillo',
        ];
        return view('admin.tag.edit', ['color'=>$color,
                                        'tag'=>$tag]);
    }

   
    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update($request->all());    
        return redirect()->route('tag.edit', compact('tag'))->with('info', 'La etiqueta se actualizo con exito');

    }

 
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag.index',)->with('delete', 'La etiqueta se eliminó con exito');
    }
}
