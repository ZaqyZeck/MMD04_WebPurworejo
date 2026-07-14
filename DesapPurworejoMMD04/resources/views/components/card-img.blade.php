@props(['foto', 'labelFoto' => '', 'badge' => null, 'judul', 'deskripsi', 'link' => null, 'linkLabel' => 'Selengkapnya →'])

<div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
    <div class="overflow-hidden h-48">
        @if($foto)
            <img src="{{ asset($foto) }}" alt="{{ $labelFoto }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
        @else
            <div class="w-full h-full bg-gray-200 flex flex-col items-center justify-center text-gray-400">
                <span class="text-4xl mb-2">🖼️</span>
                <span class="text-sm">{{ $labelFoto ?: 'Foto' }}</span>
            </div>
        @endif
    </div>
    <div class="p-5">
        @if($badge)
            <span class="inline-block bg-[#0D6B1E]/10 text-[#0D6B1E] text-xs font-semibold px-3 py-1 rounded-full mb-3">{{ $badge }}</span>
        @endif
        <h3 class="font-bold text-gray-800 mb-2 leading-snug">{{ $judul }}</h3>
        <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $deskripsi }}</p>
        @if($link)
            <a href="{{ $link }}" class="text-[#0D6B1E] text-sm font-semibold hover:gap-3 inline-flex items-center gap-1 transition-all duration-300">
                {{ $linkLabel }}
            </a>
        @endif
        {{ $slot }}
    </div>
</div>
