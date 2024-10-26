<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    
    <article class="py-8  border-b border-gray-300">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{ $post->title }}</h2>
      <div class="text-base text-gray-500"> 
        <a class="hover:underline" href="/author/{{ $post->author->id }}">{{ $post->author->name }} </a>| {{ $post->created_at->diffforhumans() }}
      </div>
      <p class="my-4 font-light">
        {{ $post->body }}
      </p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">Back &raquo;</a>
    </article>
   
  </x-layout>