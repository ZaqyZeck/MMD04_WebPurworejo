@props([
    'foto' => 'images/foto.png',
    'nama' => 'BPD',
    'subjudul' => '',
    'deskripsi' => '',
    'tags' => [],
    'link' => '#',
    'linkLabel' => 'Selengkapnya',
    'lebarFoto' => 'w-40 sm:w-52 md:w-60',
])

<div class="flex-1 p-6 sm:p-8 md:p-12 bg-stone-100 rounded-xl outline outline-1 outline-stone-300
            flex flex-col sm:flex-row items-center sm:items-start gap-6 md:gap-12 overflow-hidden">

    {{-- Foto --}}
    <div class="{{ $lebarFoto }} aspect-square rounded-lg overflow-hidden shrink-0">
        <img src="{{ asset($foto) }}"
             alt="{{ $nama }}"
             class="w-full h-full object-cover">
    </div>

    {{-- Konten --}}
    <div class="flex-1 flex flex-col items-center sm:items-start text-center sm:text-left">

        <h3 class="text-green-900 text-xl sm:text-2xl font-semibold leading-8">
            {{ $nama }}
        </h3>

        <p class="text-neutral-700 text-sm font-medium leading-5 tracking-tight">
            {{ $subjudul }}
        </p>

        <p class="pt-5 text-zinc-900 text-sm sm:text-base leading-6">
            {{ $deskripsi }}
        </p>

        @if(count($tags))
            <div class="pt-5 flex flex-wrap gap-3 justify-center sm:justify-start">

                @foreach($tags as $tag)
                    <span class="px-3 py-1 bg-green-900/10 rounded-sm text-green-900 text-xs font-semibold">
                        {{ $tag }}
                    </span>
                @endforeach

            </div>
        @endif

        <a href="{{ $link }}"
           class="pt-5 inline-flex items-center gap-1 text-green-900 text-sm font-bold hover:gap-2 transition-all">

            {{ $linkLabel }}

            <svg class="w-3.5 h-3.5"
                 fill="currentColor"
                 viewBox="0 0 20 20">

                <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"/>

            </svg>

        </a>

    </div>

</div>