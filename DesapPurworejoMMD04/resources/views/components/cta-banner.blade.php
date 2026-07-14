@props(['judul', 'deskripsi'])

<div class="bg-gradient-to-br from-[#0D6B1E] to-[#1a4a2e] rounded-2xl p-10 text-center text-white">
    <h2 class="text-2xl md:text-3xl font-bold mb-3">{{ $judul }}</h2>
    <p class="text-white/80 max-w-xl mx-auto mb-7">{{ $deskripsi }}</p>
    <div class="flex flex-col sm:flex-row gap-3 justify-center">
        {{ $slot }}
    </div>
</div>
