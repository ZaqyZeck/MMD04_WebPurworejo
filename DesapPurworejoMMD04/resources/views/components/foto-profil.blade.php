@props(['foto' => null, 'nama', 'jabatan', 'ukuran' => 'md'])

@php
$ukuranKelas = match($ukuran) {
    'sm' => 'w-16 h-16',
    'md' => 'w-24 h-24',
    'lg' => 'w-32 h-32',
    default => 'w-24 h-24',
};
@endphp

<div class="text-center">
    <div class="{{ $ukuranKelas }} rounded-full overflow-hidden mx-auto mb-3 border-4 border-[#0D6B1E]/20">
        @if($foto)
            <img src="{{ asset($foto) }}" alt="{{ $nama }}" class="w-full h-full object-cover">
        @else
            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400 text-2xl">👤</div>
        @endif
    </div>
    <h3 class="font-bold text-gray-800 text-sm">{{ $nama }}</h3>
    <x-badge class="mt-1">{{ $jabatan }}</x-badge>
</div>
