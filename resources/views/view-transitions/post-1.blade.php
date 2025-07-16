<x-layout title="View Transitions — Post" cssFile="resources/css/view-transitions-post.css">
 <div class="grid min-h-screen place-items-center">

  <div class="grid max-w-xl grid-cols-[auto_1fr] gap-8 mx-auto">
   <h1 class="text-xl font-semibold" style="view-transition-name: title">
    <a class="hover:underline" href="{{ route('view-transitions.post-2') }}">
     From Grid to Block
    </a>
   </h1>
   <p class="text-sm text-slate-700" style="view-transition-name: copy">Lorem, ipsum dolor sit amet consectetur
    adipisicing
    elit. Itaque molestias alias culpa
    minima? Qui,
    distinctio
    placeat. Vel quisquam molestiae repellat, libero sequi cumque beatae modi ex voluptas, nostrum vero. Optio?</p>
  </div>
 </div>

</x-layout>