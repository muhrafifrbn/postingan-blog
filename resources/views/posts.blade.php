<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title>
  

  @foreach ($posts as $item)
  <article class="py-8  border-b border-gray-300">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{ $item->title }}</h2>
    <div class="text-base text-gray-500"> 
      <a href="#">{{ $item->author }} </a>| {{ $item->created_at->diffforhumans() }}
    </div>
    <p class="my-4 font-light">
      {{ Str::limit($item->body, 100, '...') }}
    </p>
    <a href="/post/{{ $item->slug }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
  </article>
  @endforeach
</x-layout>