<x-layout :title="$title">
    
        <article class="py-8 max-w-screen-md border-b border-gray-300">
               <h2 class="text-xl font-bold mb-1 tracking-tight text">{{ $post['title'] }}</h2>
            
            <div class="font-tight text-gray-500  text-sm md:text-base">
                <a href="#">{{ $post['author'] }}</a> | {{ $post['date'] }} | <a href="#">{{ $post['kategori'] }}</a>
            </div>
            <p class="my-4 font-light">{{ $post['content'] }}</p>
            <a href="/posts" class="text-blue-500 hover:underline">&laquo; Back to all posts</a>
        </article>
    
</x-layout>