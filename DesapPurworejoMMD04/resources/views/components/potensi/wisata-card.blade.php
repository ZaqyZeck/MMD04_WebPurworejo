@props([
    'foto',
    'kategori' => null,
    'judul',
    'deskripsi',
    'labelTombol' => 'Lihat Lokasi',
    'warnaTombol' => 'hijau',
    'link' => '#',
])

@php
    $warnaBtn = match($warnaTombol) {
        'instagram' => 'bg-gradient-to-r from-purple-500 via-pink-500 to-orange-400 hover:opacity-90',
        'tokopedia' => 'bg-green-600 hover:bg-green-700',
        default     => 'bg-green-500 hover:bg-green-600',
    };
@endphp

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300']) }}>
    <div class="relative h-52 overflow-hidden">
        <img src="{{ asset($foto) }}" alt="{{ $judul }}" class="w-full h-full object-cover">
        <span class="absolute top-3 left-3 bg-[#0D6B1E] text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide">
            {{ $kategori }}
        </span>
    </div>
    <div class="p-5">
        <h3 class="font-bold text-gray-800 mb-1">{{ $judul }}</h3>
        <p class="text-gray-500 text-sm mb-4 leading-relaxed">{{ $deskripsi }}</p>
        <div class="flex items-center gap-2">
            <a href="{{ $link }}" target="_blank"
               class="flex-1 text-center text-white text-sm font-semibold py-2.5 rounded-lg transition-colors {{ $warnaBtn }}">
                {{ $labelTombol }}
            </a>
            <button type="button" class="w-10 h-10 flex-shrink-0 rounded-lg border border-gray-200 flex items-center justify-center text-gray-500 hover:bg-gray-50">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342a3 3 0 100 2.316m0-2.316l6.632 3.316m-6.632-5.632l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 8.632a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                </svg>
            </button>
        </div>
    </div>
</div>