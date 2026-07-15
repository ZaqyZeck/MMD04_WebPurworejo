@props(['foto', 'badge', 'ikonBadge' => '🎭', 'judul', 'deskripsi', 'link' => '#', 'balik' => false])

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
    <div class="{{ $balik ? 'md:order-2' : 'md:order-1' }}">
        <img src="{{ asset($foto) }}" alt="{{ $judul }}" class="rounded-2xl shadow-lg w-full h-64 md:h-72 object-cover">
    </div>
    <div class="{{ $balik ? 'md:order-1' : 'md:order-2' }}">
        <span class="inline-flex items-center gap-2 text-[#0D6B1E] font-semibold text-sm mb-3">
            {{ $ikonBadge }} {{ $badge }}
        </span>
        <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $judul }}</h3>
        <p class="text-gray-600 leading-relaxed mb-5">{{ $deskripsi }}</p>
        <x-btn href="{{ $link }}" varian="garis">Read More</x-btn>
    </div>
</div>