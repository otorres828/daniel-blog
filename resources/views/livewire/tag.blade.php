<div>
   <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
       <h1 class="text-center font-bold text-3xl pt-6">Etiqueta: {{ $tag->name }}</h1>
       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
           @foreach ($posts as $post)
               <article class="w-full h-80 bg-cover bg-center " style="background-image: url({{ Storage::url($post->image->url) }})">
                   @include('components.post')

               </article>
           @endforeach
       </div>

       <div class="py-5">
           {{ $posts->links() }}
       </div>
   </div>
</div>

