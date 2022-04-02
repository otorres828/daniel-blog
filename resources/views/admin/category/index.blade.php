@extends('adminlte::page')

@section('title', 'Blog Daniel')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    

    <div class="pb-4">
        <x-alert/>
        <a class="btn btn-secondary" href="{{ route('category.create') }}">
            Agregar Categoria
        </a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar modal
        </button>
        {{-- MODAL --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
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
                    @foreach ($categorias as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('category.edit', $category) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('category.destroy', $category) }}" method="POST">
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