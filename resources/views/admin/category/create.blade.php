@extends('adminlte::page')

@section('title', 'Blog Daniel')

@section('content_header')
    <h1>Crear nueva categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'category.store', 'autocomplete' => 'off']) !!}
             <x-formulario.category nombre='Crear Categoria'/>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
