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
],
[
'id' => 2,
'title' => 'Cyber Splash',
'image' => '02.png',
],
[
'id' => 3,
'title' => 'Kingdom Lara',
'image' => '03.png',
],
[
'id' => 4,
'title' => 'Future Frameworks',
'image' => '04.png',
],
[
'id' => 5,
'title' => 'Geometric Painting',
'image' => '05.png',
],
[
'id' => 6,
'title' => 'Pastel Dream',
'image' => '06.png',
]
];
@endphp

<x-layout title="View Transitions — Gallery" cssFile="resources/css/view-transitions-gallery.css">
    <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex flex-col gap-4 text-center" style="view-transition-name: header">
            <h1 class="text-5xl font-semibold">Gallery view</h1>
            <p class="text-xl text-slate-700">Keep updated with the latest stuff happening around here.</p>
        </div>
        <div class="grid max-w-2xl md:gap-8 gap-4 mx-auto mt-12 grid-cols-2">

            @foreach ($images as $image)
            <a href="{{ route('view-transitions.gallery.show', $image['id']) }}" class="transition hover:-translate-y-1"
                style="view-transition-name: image-{{ $image['id'] }}">
                <div class="relative w-full overflow-hidden aspect-video rounded-2xl">
                    <img src="{{ asset('/images/view-transitions/' . $image['image']) }}" alt="{{ $image['title'] }}"
                        class="absolute inset-0 object-cover w-full h-full">
                </div>
            </a>
            @endforeach

        </div>
    </div>
</x-layout>