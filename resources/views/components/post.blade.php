<div class="w-full h-full px-8 flex flex-col justify-center ">
    <div>
        @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}" class=" sinline-block px-3 h-6 bg-[#{{$tag->color}}] text-white rounded-full">{{$tag->name}}</a>
        @endforeach
    </div>
    
    <h1 class="text-4xl text-white leading-8 font-bold">
        <a href="{{route('posts.show', $post)}}">
            {{$post->name}}
        </a>
    </h1>
    
</div>