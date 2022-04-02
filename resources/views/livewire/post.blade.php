<div>

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <input wire:model="buscar"
        class="mt-10 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        type="text" placeholder="ESCRIBE EL NOMBRE DEL POST">

        {{-- TODAS LAS CATEGORIAS --}}
        <select wire:model="buscar_por_categoria" class="mt-5 rounded-lg border-1  border-light-blue-500">
            <option value="todaslascategorias">Todas las Categoria</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" class="">{{ $categoria->name }}</option>
            @endforeach
        </select>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif"
                    style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}}@else https://cdn.pixabay.com/photo/2022/01/26/05/56/stairs-6968125_960_720.jpg  @endif)">
                    @include('components.post')
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</div>
