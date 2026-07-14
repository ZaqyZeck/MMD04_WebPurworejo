@props(['warna' => 'hijau', 'tengah' => false])

@php
$kelas = match($warna) {
    'hijau'  => 'bg-[#0D6B1E]/10 text-[#0D6B1E]',
    'emas'   => 'bg-[#c9a84c]/20 border border-[#c9a84c] text-[#c9a84c]',
    'putih'  => 'bg-white/20 border border-white/50 text-white',
    'abu'    => 'bg-gray-100 text-gray-600',
    default  => 'bg-[#0D6B1E]/10 text-[#0D6B1E]',
};
@endphp

<span class="inline-block {{ $kelas }} text-sm font-semibold px-4 py-1.5 rounded-full {{ $tengah ? 'block text-center mx-auto w-fit mb-3' : 'mb-3' }}">
    {{ $slot }}
</span>
