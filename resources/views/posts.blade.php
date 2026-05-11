<x-layout :title="$title">
    {{-- @forelse ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-xl font-bold mb-1 tracking-tight text">{{ $post['title'] }}</h2>
            </a>
            <div class="font-tight text-gray-500  text-sm md:text-base">
                By
                <a href="/authors/{{ $post->author->username }}" class="hover:underline text-gray-900"> {{ $post->author->name }}
                </a> in 
                <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-gray-900">{{ $post->category->name }}
                </a> | {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }} 
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['content'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @empty
        <p>No posts available.</p>
    @endforelse --}}


  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      
      <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @forelse ($posts as $post)
          <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                <a href="/categories/{{ $post->category->slug }}" class="hover:underline">
                <span class="{{ $post->category->color }} text-slate-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                      <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                      {{ $post->category->name }}
                  </span>
                </a>
                  
                  <span class="text-sm">{{ $post->created_at->diffForHumans()}}</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->content, 100) }}</p>
              <div class="flex justify-between items-center">
                  <div class="flex items-center space-x-4">
                      <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                      <span class="font-medium text-xs dark:text-white">
                          {{ $post->author->name }}
                      </span>
                  </div>
                  <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-xs text-primary-600 dark:text-primary-500 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </article>
        @empty
          <p>No posts available.</p>
        @endforelse
      </div>  
  </div>

</x-layout>
        