@props(['ikon' => null, 'judul', 'deskripsi', 'link' => null, 'linkLabel' => 'Selengkapnya →', 'hijau' => false])

<div class="group {{ $hijau ? 'bg-[#0D6B1E] text-white' : 'bg-gray-50 border border-gray-100' }} rounded-xl p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl {{ $hijau ? '' : 'hover:border-[#0D6B1E]/20' }}">
    @if($ikon)
        <div class="text-4xl mb-4 transition-transform duration-300 group-hover:scale-110">{{ $ikon }}</div>
    @endif
    <h3 class="text-lg font-bold {{ $hijau ? 'text-white' : 'text-gray-800' }} mb-2">{{ $judul }}</h3>
    <p class="{{ $hijau ? 'text-white/80' : 'text-gray-500' }} text-sm leading-relaxed mb-4">{{ $deskripsi }}</p>
    @if($link)
        <a href="{{ $link }}" class="{{ $hijau ? 'text-[#f0d080]' : 'text-[#0D6B1E]' }} text-sm font-semibold inline-flex items-center gap-1 hover:gap-3 transition-all duration-300">
            {{ $linkLabel }}
        </a>
    @endif
    {{ $slot }}
</div>
