@props(['ikon', 'judul', 'deskripsi' => null])

<div class="flex items-center gap-3">
    <div class="w-9 h-9 rounded-full bg-white/15 flex items-center justify-center text-[#f0d080] text-base flex-shrink-0">
        {{ $ikon }}
    </div>
    <div>
        <p class="font-semibold text-white text-sm leading-tight">{{ $judul }}</p>
        @if($deskripsi)
            <p class="text-white/60 text-xs mt-0.5">{{ $deskripsi }}</p>
        @endif
    </div>
</div>