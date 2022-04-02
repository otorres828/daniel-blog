@extends('adminlte::page')

@section('title', 'Blog Daniel')

@section('content_header')
    <h1>Lista de posts</h1>
@stop

@section('content')
    <x-alert/>

    <div class="pb-4">
        <a class="btn btn-secondary" href="{{ route('post.create') }}">
            Agregar Post
        </a>

    </div>

    <div class="card">
        <div class="card-body">
            <table id="table" class="table table-striped ">
                <thead>
                    <th scope="col">#Id</th>
                    <th scope="col">Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('post.edit', $post) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('post.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

<x-formulario.cssjs/>