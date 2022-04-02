<div class=" max-w-sm rounded overflow-hidden shadow-lg mx-auto">
    <a href="{{ route('posts.show', $post) }}">
        <img class="rounded-3xl shadow w-full h-96"  src="@if($post->image){{ Storage::url($post->image->url) }}@else https://cdn.pixabay.com/photo/2022/01/26/05/56/stairs-6968125_960_720.jpg @endif" alt="">

    </a>
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </div>
        <p class="text-gray-700 text-base">
            {{Illuminate\Support\Str::limit($post->extract,200,'...')}}
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $item)
            <a href="{{ route('posts.tag', $item) }}">
                <span 
                    class="inline-block  bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $item->name }}</span>
            </a>
        @endforeach
    </div>
</div>
