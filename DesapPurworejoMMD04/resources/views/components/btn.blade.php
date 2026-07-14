@props(['href' => '#', 'varian' => 'utama'])

@php
$kelas = match($varian) {
    'utama'  => 'bg-[#0D6B1E] hover:bg-[#095516] text-white shadow-lg hover:shadow-xl',
    'putih'  => 'bg-white/10 hover:bg-white/20 border border-white/50 text-white backdrop-blur-sm',
    'garis'  => 'border-2 border-[#0D6B1E] text-[#0D6B1E] hover:bg-[#0D6B1E] hover:text-white',
    'emas'   => 'bg-[#c9a84c] hover:bg-[#b8973b] text-white shadow-lg',
    default  => 'bg-[#0D6B1E] hover:bg-[#095516] text-white',
};
@endphp

<a href="{{ $href }}" class="inline-flex items-center justify-center gap-2 font-semibold px-7 py-3 rounded-full transition-all duration-300 hover:-translate-y-0.5 {{ $kelas }}">
    {{ $slot }}
</a>
