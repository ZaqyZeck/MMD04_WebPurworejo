@props(['badge' => null, 'judul', 'subjudul' => null, 'kiri' => false])

<div class="{{ $kiri ? 'text-left' : 'text-center' }} mb-12">
    @if($badge)
        <x-badge :tengah="!$kiri">{{ $badge }}</x-badge>
    @endif
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">{{ $judul }}</h2>
    @if($subjudul)
        <p class="text-gray-500 {{ $kiri ? '' : 'max-w-xl mx-auto' }}">{{ $subjudul }}</p>
    @endif
</div>
