<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    
    {{-- <article class="py-8  border-b border-gray-300">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{ $post->title }}</h2>
      <div > 
        By
        <a class="hover:underline text-base text-gray-500" href="/author/{{ $post->author->username }}">{{ $post->author->name }} </a>  
        In
        <a class="hover:underline text-base text-gray-500" href="/category/{{ $post->category->slug }}">{{ $post->category->name }} </a> | {{ $post->created_at->diffforhumans() }}
      </div>
      <p class="my-4 font-light">
        {{ $post->body }}
      </p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">Back &raquo;</a>
    </article> --}}



    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
          <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
              <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                  <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-sm text-blue-500 hover:underline">&laquo; Back to all posts</a>
                      <address class="flex items-center mb-6 not-italic">
                          <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                              <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                              <div>
                                  <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                  <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                    <a href="/posts?category={{ $post->category->slug }}">
                                      <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                          <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                        {{ $post->category->name }}
                                      </span>
                                  </a>
                                  </p>
                                  <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time></p>
                              </div>
                          </div>
                      </address>
                      <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
                  </header>
                  <p class="lead">{{ $post->body }}</p>
                </article>
              </div>
    </main>
   
</x-layout>