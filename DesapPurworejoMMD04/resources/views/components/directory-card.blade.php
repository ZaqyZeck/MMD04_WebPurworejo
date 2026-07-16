@props([
    'rw' => 'RW 01',
    'dusun' => 'Dusun',
    'ketua' => '-',
    'telepon' => '-',
    'rt' => '0 RT',
    'status' => 'Aktif',
    'span' => false,
])

<div class="bg-white rounded-xl outline outline-1 outline-stone-300 p-6 sm:p-8 md:p-12 flex flex-col gap-6 {{ $span ? 'sm:col-span-2 md:col-span-1' : '' }}">

    <div class="flex justify-between items-start gap-4">

        <div>
            <h3 class="text-xl sm:text-2xl font-semibold text-zinc-900 leading-8">
                {{ $rw }}
            </h3>

            <p class="text-neutral-700 text-sm sm:text-base leading-6">
                {{ $dusun }}
            </p>
        </div>

        <span class="px-3 py-1 bg-green-300 rounded-full text-green-800 text-xs font-semibold leading-4 shrink-0">
            {{ $status }}
        </span>

    </div>

    <div class="flex flex-col gap-3 pb-6">

        {{-- Ketua --}}
        <div class="flex items-center gap-4">

            <svg class="w-4 h-4 text-green-900 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
            </svg>

            <span class="text-zinc-900 text-sm sm:text-base font-bold leading-6">
                {{ $ketua }}
            </span>

        </div>

        <div class="flex items-center gap-4">

            <svg class="w-4 h-4 text-green-900 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/>
            </svg>

            <span class="text-neutral-700 text-sm sm:text-base leading-6">
                {{ $telepon }}
            </span>

        </div>

        <div class="flex items-center gap-4">

            <svg class="w-4 h-5 text-green-900 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
            </svg>

            <span class="text-neutral-700 text-sm sm:text-base leading-6">
                {{ $rt }}
            </span>

        </div>

    </div>

    <button
        class="w-full py-3 rounded-lg outline outline-1 outline-green-900 text-green-900 text-base font-bold leading-6 hover:bg-green-50 transition">

        Hubungi Pengurus

    </button>

</div>