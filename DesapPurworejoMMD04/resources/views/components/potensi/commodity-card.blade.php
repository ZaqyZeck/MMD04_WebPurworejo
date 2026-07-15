@props(['ikon', 'judul', 'deskripsi', 'warna' => 'hijau', 'link' => '/potensi'])

@php
    $warnaIkon = match($warna) {
        'orange' => 'bg-orange-100 text-orange-600',
        'merah'  => 'bg-red-100 text-red-600',
        'hijau'  => 'bg-green-100 text-[#0D6B1E]',
    };
    $warnaLink = match($warna) {
        'merah' => 'text-red-600 hover:text-red-700',
        'orange' => 'text-orange-600 hover:text-orange-700',
        'hijau' => 'text-[#0D6B1E] hover:text-[#0a5417]',
    };
@endphp

<div class="bg-white rounded-2xl p-6 shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
    <div class="w-14 h-14 rounded-xl {{ $warnaIkon }} flex items-center justify-center text-2xl mb-5">
        {{ $ikon }}
    </div>
    <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $judul }}</h3>
    <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $deskripsi }}</p>
    <a href="{{ $link }}" class="text-sm font-semibold {{ $warnaLink }} inline-flex items-center gap-1">
        Learn More <span>&rarr;</span>
    </a>
</div>