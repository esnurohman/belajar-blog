<x-layout :title="$title">
    @forelse ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-xl font-bold mb-1 tracking-tight text">{{ $post['title'] }}</h2>
            </a>
            <div class="font-tight text-gray-500  text-sm md:text-base">
                <a href="#">{{ $post['author'] }}</a> | {{ $post['date'] }} | <a href="#">{{ $post['kategori'] }}</a>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['content'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @empty
        <p>No posts available.</p>
    @endforelse
</x-layout>
        