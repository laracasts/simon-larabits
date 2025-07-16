<x-layout title="CSS Subgrid">
 <div class="grid p-8 mx-auto max-w-7xl min-h-dvh place-items-center">
  <div class="grid grid-cols-3 gap-x-12">

   @foreach($cards as $card)
   <div class="p-8 bg-{{$card['color']}}-500 grid grid-cols-1 place-items-start grid-rows-subgrid row-span-4">
    <h2 class="text-5xl font-extrabold text-white">{{ $card['title'] }}</h2>
    <svg class="mt-12" xmlns="http://www.w3.org/2000/svg" width="78" height="24" fill="none">
     <path stroke="#fff" stroke-width="6" d="M3 19.4 17.4 5l14.4 14.4L46.2 5l14.4 14.4L75 5" />
    </svg>
    <p class="mt-8 text-white">
     {{ $card['body']}}
    </p>
    <a href="#"
     class="inline-block px-6 py-2 mt-8 text-sm font-medium tracking-wide text-white border-2 border-white rounded hover:bg-white hover:border-{{$card['color']}}-500 hover:text-{{$card['color']}}-500">Get
     started</a>
   </div>
   @endforeach
  </div>
 </div>
</x-layout>