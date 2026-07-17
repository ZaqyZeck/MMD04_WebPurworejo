@props([
    'foto',
    'alt'
])

<div class="group relative overflow-hidden rounded-xl h-48 md:h-56 cursor-pointer">
    <img
        src="{{ asset($foto) }}"
        alt="{{ $alt }}"
        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/50 transition-all duration-300"></div>
</div>