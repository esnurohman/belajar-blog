<x-layout :title="$title">
    
        <article class="py-8 max-w-screen-md border-b border-gray-300">
               <h2 class="text-xl font-bold mb-1 tracking-tight text">{{ $post['title'] }}</h2>
            
            <div class="font-tight text-gray-500  text-sm md:text-base">
                By
                <a href="/authors/{{ $post->author->username }}" class="hover:underline text-gray-900"> {{ $post->author->name }}
                </a> in 
                <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-gray-900">{{ $post->category->name }}
                </a> | {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y')}} 
            </div>
            <p class="my-4 font-light">{{ $post['content'] }}</p>
            <a href="/posts" class="text-blue-500 hover:underline">&laquo; Back to all posts</a>
        </article>
    
</x-layout>