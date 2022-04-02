{!! Form::hidden('user_id', auth()->user()->id) !!}

<div class="form-group">
    {!! Form::label('name', 'NOMBRE DEL POST') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post', 'required']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'SLUG DEL POST') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'slug-del-post', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'CATEGORIAS') !!}
    {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">ETIQUETAS</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">ESTADO</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    <br>
    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row">
    <div class="col-3">
        <div class="image-wraper">
            @isset($post->image)
                <img id="picture " src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img src="https://pbs.twimg.com/profile_images/740993726189834240/WbUqIPMS.jpg" alt="">                
            @endisset
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                {!! Form::label('file', 'imagen que se mostrara en el Contenido') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                @error('file')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('extract', 'Extracto del Contenido') !!}
        {!! Form::text('extract', null, ['class' => 'form-control']) !!}
        @error('extract')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Cuerpo del Contenido') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        @error('body')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {!! Form::submit($nombre, ['class' => 'btn btn-info']) !!}
