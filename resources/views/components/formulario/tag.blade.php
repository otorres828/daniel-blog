<div class="form-group">
    {!! Form::label('name', 'NOMBRE DE LA ETIQUETA') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta', 'required']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'SLUG DE LA ETIQUETA') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'slug-de-la-etiqueta', 'readonly']) !!}
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label (null, 'color', null) !!}
    {!! Form::select('color', $color, null, ['class' => 'form-control']) !!}
</div>

@error('color')
    <span class="text-danger">{{ $message }}</span>
@enderror

{!! Form::submit($nombre, ['class' => 'btn btn-info']) !!}
