<div class="form-group">
    {!! Form::label('name', 'NOMBRE DE LA CATEGORIA') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre Categoria','required']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'SLUG DE LA CATEGORIA') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'slug-de-la-categoria', 'readonly']) !!}
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
{!! Form::submit($nombre, ['class' => 'btn btn-info']) !!}
