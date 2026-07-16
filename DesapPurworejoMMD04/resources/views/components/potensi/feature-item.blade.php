@props(['ikon', 'judul', 'deskripsi' => null])

<div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-[#0D6B1E]/10 rounded-xl flex items-center justify-center text-[#f0d080] text-base flex-shrink-0">
        {{ $ikon }}
    </div>
    <div>
        <p class="font-semibold text text-sm leading-tight">{{ $judul }}</p>
        @if($deskripsi)
            <p class="text-gray-600 text-xs mt-0.5">{{ $deskripsi }}</p>
        @endif
    </div>
</div>