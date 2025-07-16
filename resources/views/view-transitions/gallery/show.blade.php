@php

/*
This should come from the database, but adding it here so
there is no need to seed the database for this demo.
*/

$images = [
[
'id' => 1,
'title' => 'Brushy Lines',
'image' => '01.png',
'intro' => 'A vibrant piece that captures the essence of abstract art with its brushy lines and vivid colors.',
],
[
'id' => 2,
'title' => 'Cyber Splash',
'image' => '02.png',
'intro' => 'A digital masterpiece that combines technology and art, creating a splash of cybernetic beauty.',
],
[
'id' => 3,
'title' => 'Kingdom Lara',
'image' => '03.png',
'intro' => 'An homage to the iconic character, this piece blends fantasy and realism in a stunning portrayal.',
],
[
'id' => 4,
'title' => 'Future Frameworks',
'image' => '04.png',
'intro' => 'A futuristic vision that explores the intersection of architecture and technology, showcasing innovative
designs.',
],
[
'id' => 5,
'title' => 'Geometric Painting',
'image' => '05.png',
'intro' => 'A captivating geometric composition that plays with shapes and colors, creating a harmonious visual
experience.',
],
[
'id' => 6,
'title' => 'Pastel Dream',
'image' => '06.png',
'intro' => 'A soft and dreamy piece that uses pastel colors to evoke a sense of calm and tranquility.',
]
];

// Split the dynamic route image from the other images
$images = collect($images);
$image = $images->firstWhere('id', (int) request()->route('item'));
$images = $images->reject(fn($img) => $img['id'] === $image['id']);

@endphp

<x-layout title="View Transitions — Gallery" cssFile="resources/css/view-transitions-gallery.css">
  <div class="relative">
    <div class="absolute top-4 left-4">
      <a class="text-sm font-medium hover:underline" href="{{ route('demos.view-transitions-(gallery)') }}">&larr; Go
        back</a>
    </div>
  </div>
  <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">

    <div class="flex flex-col max-w-2xl gap-4 mx-auto text-center" style="view-transition-name: header">
      <h1 class="text-5xl font-semibold">{{ $image['title'] }}</h1>
      <p class="text-xl text-slate-700">{{ $image['intro'] }}</p>
    </div>
    <div class="max-w-lg mx-auto mt-12">

      <div class="relative w-full overflow-hidden aspect-video rounded-2xl"
        style="view-transition-name: image-{{ $image['id'] }}">
        <img src="{{ asset('/images/view-transitions/' . $image['image']) }}" width="512" height="512"
          alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
          class="absolute inset-0 object-cover w-full h-full">
      </div>
      <div class="grid grid-cols-5 gap-4 mt-8">

        @foreach ($images as $image)
        <a href="{{ route('view-transitions.gallery.show', $image['id']) }}" class="transition hover:-translate-y-0.5"
          style="view-transition-name: image-{{ $image['id'] }}">
          <div class="relative w-full overflow-hidden rounded-lg aspect-video">
            <img src="{{ asset('/images/view-transitions/' . $image['image']) }}" width="80" height="56"
              alt="{{ $image['title'] }}" class="absolute inset-0 object-cover w-full h-full">
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
</x-layout>