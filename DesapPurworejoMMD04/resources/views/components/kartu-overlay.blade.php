@props(['foto', 'labelFoto' => '', 'badge' => null, 'judul', 'subjudul' => null, 'tinggi' => 'h-56'])

<div class="group relative overflow-hidden rounded-xl cursor-pointer {{ $tinggi }}">
    @if($foto)
        <img src="{{ asset($foto) }}" alt="{{ $labelFoto }}"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
    @else
        <div class="w-full h-full bg-gray-200 flex flex-col items-center justify-center text-gray-400">
            <span class="text-4xl mb-2">🖼️</span>
            <span class="text-sm">{{ $labelFoto ?: 'Foto' }}</span>
        </div>
    @endif
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-5">
        <div>
            @if($badge)
                <span class="inline-block bg-[#0D6B1E] text-white text-xs font-semibold px-2.5 py-1 rounded-full mb-2">{{ $badge }}</span>
            @endif
            <h3 class="text-white font-bold text-lg leading-tight">{{ $judul }}</h3>
            @if($subjudul)
                <p class="text-white/70 text-sm mt-1">{{ $subjudul }}</p>
            @endif
        </div>
    </div>
</div>
