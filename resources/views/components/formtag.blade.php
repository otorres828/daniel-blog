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
    <label for="">COLOR</label>
    <select name="color" class="form-control">
        <option value="cyan-900">Azul</option>
        <option value="red-700">Rojo</option>
        <option value="amber-800">Amber</option>
        <option value="purple-600">Purpura</option>
        <option value="lime-600">Verde</option>
    </select>
</div>

@error('color')
    <span class="text-danger">{{ $message }}</span>
@enderror

{!! Form::submit($nombre, ['class' => 'btn btn-info']) !!}
