@extends('layouts.app')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="relative w-full h-[600px] overflow-hidden flex items-center">
    <div class="absolute inset-0 bg-cover bg-center animate-[zoomOut_8s_ease-out_forwards]"
        style="background-image: url('{{ asset('images/foto.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/20"></div>

    <div class="relative z-10 text-white px-6 max-w-6xl mx-auto w-full animate-[fadeInUp_1s_ease-out_forwards]">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-5 drop-shadow-lg">
                Potensi Desa Purworejo
            </h1>
            <p class="text-base md:text-lg text-white/85 mb-10 leading-relaxed">
                Pusat inovasi ekonomi lokal dan pelestarian warisan budaya yang harmonis. Temukan kekayaan alam, kreativitas UMKM, dan kearifan lokal kami yang mendunia.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <x-btn href="#komoditas" varian="utama">Jelajahi Potensi ↓</x-btn>
                <x-btn href="#video" varian="putih">Video Profil</x-btn>
            </div>
        </div>
    </div>
</section>

{{-- ===================== TENTANG PURWOREJO ===================== --}}
<section id="tentang" class="bg-[#FCF9F8] py-20 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="relative">
            <img src="{{ asset('images/foto.png') }}" alt="Sawah Desa Purworejo"
                class="rounded-2xl shadow-xl w-full object-cover h-[380px]">
        </div>
        <div>
            <x-badge warna="hijau">Tentang Purworejo</x-badge>
            <h2 class="text-3xl md:text-4xl font-bold text-[#0D6B1E] mt-4 mb-4 leading-snug">
                Sumber Daya Alam yang Melimpah
            </h2>
            <p class="text-gray-600 leading-relaxed mb-8">
                Desa Purworejo merupakan kawasan agraris yang diberkati dengan tanah vulkanik yang subur dan sistem irigasi berkelanjutan. Kami menggabungkan tradisi turun-temurun dengan teknik pertanian modern untuk menghasilkan komoditas kualitas premium yang menjadi tulang punggung ekonomi warga.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-potensi.feature-item ikon="🌱" judul="Pertanian Organik" deskripsi="Prioritas pelestarian tanah" />
                <x-potensi.feature-item ikon="💧" judul="Irigasi Modern" deskripsi="Sistem distribusi mandiri" />
            </div>
        </div>
    </div>
</section>

{{-- ===================== STATISTIK POTENSI ===================== --}}
<section class="bg-[#F6F3F2] py-16 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($statistik as $item)
            <x-stat-card
                :ikon="$item['ikon']"
                :angka="$item['angka']"
                :label="$item['label']"
            />
        @endforeach
    </div>
</section>

{{-- ===================== KOMODITAS UNGGULAN ===================== --}}
<section id="komoditas" class="bg-[#FCF9F8] py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            judul="Komoditas Unggulan"
            subjudul="Produk pertanian pilihan dari tanah Desa Purworejo yang telah menembus pasar regional dan nasional."
            warnaJudul="text-[#0D6B1E]"
        />
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($commodity as $item)
                <x-potensi.commodity-card
                    :ikon="$item['ikon']"
                    :judul="$item['judul']"
                    :deskripsi="$item['deskripsi']"
                    :warna="$item['warna']"
                    :link="$item['link']"
                />
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== EKOSISTEM UMKM ===================== --}}
<section class="bg-white py-20 px-6" x-data="{ filter: 'semua' }">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0D6B1E] mb-3">Ekosistem UMKM</h2>
                <p class="text-gray-500 max-w-xl">Produk lokal berkualitas dari tangan terampil warga Desa Purworejo.</p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button type="button" @click="filter = 'semua'"
                    :class="filter === 'semua' ? 'bg-[#0D6B1E] text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-colors">Semua</button>
                <button type="button" @click="filter = 'kuliner'"
                    :class="filter === 'kuliner' ? 'bg-[#0D6B1E] text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-colors">Kuliner</button>
                <button type="button" @click="filter = 'kerajinan'"
                    :class="filter === 'kerajinan' ? 'bg-[#0D6B1E] text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-colors">Kerajinan</button>
                <button type="button" @click="filter = 'fashion'"
                    :class="filter === 'fashion' ? 'bg-[#0D6B1E] text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-colors">Fashion</button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($umkm as $item)
                <x-potensi.umkm-card
                    x-show="filter === 'semua' || filter === '{{ strtolower($item['kategori']) }}'"
                    :foto="$item['foto']"
                    :kategori="$item['kategori']"
                    :judul="$item['judul']"
                    :deskripsi="$item['deskripsi']"
                    :labelTombol="$item['labelTombol']"
                    :warnaTombol="$item['warnaTombol']"
                    :link="$item['link']"
                />
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== DESTINASI WISATA ===================== --}}
<section class="bg-[#FCF9F8] py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            judul="Destinasi Wisata"
        />
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($wisata as $item)
                <x-potensi.wisata-card
                    :foto="$item['foto']"
                    :kategori="$item['kategori']"
                    :judul="$item['judul']"
                    :deskripsi="$item['deskripsi']"
                    :labelTombol="$item['labelTombol']"
                    :warnaTombol="$item['warnaTombol']"
                    :link="$item['link']"
                />
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== KEBUDAYAAN LOKAL ===================== --}}
<section class="bg-[#F6F3F2] py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-[#0D6B1E] mb-12">Kebudayaan Lokal</h2>
        <div class="space-y-14">
            @foreach($culture as $item)
                <x-potensi.culture-card
                    :foto="$item['foto']"
                    :badge="$item['badge']"
                    :ikonBadge="$item['ikonBadge']"
                    :judul="$item['judul']"
                    :deskripsi="$item['deskripsi']"
                    :link="$item['link']"
                    :balik="$item['balik']"
                />
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== GALERI KEGIATAN ===================== --}}
<section class="bg-[#FCF9F8] py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header judul="Galeri Kegiatan" warnaJudul="text-[#0D6B1E]"/>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($gallery as $item)
                <x-potensi.gallery-card
                    :foto="$item['foto']"
                    :alt="$item['alt']"
                />
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== AJAKAN KOLABORASI ===================== --}}
<section class="bg-white py-20 px-6">

    <div class="max-w-5xl mx-auto rounded-3xl bg-gradient-to-r from-[#0D6B1E] via-[#17772A] to-[#2E8C3E] px-8 md:px-16 py-14 text-center shadow-xl">
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
            Mari Bersama Mengembangkan
            <br>
            Potensi Desa Purworejo
        </h2>

        <p class="mt-5 text-white/75 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            Kami membuka peluang kolaborasi bagi investor, akademisi,
            serta wisatawan untuk ikut serta dalam pertumbuhan desa kami.
        </p>

        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="/kontak" class="inline-flex items-center gap-2 rounded-full bg-[#FFE8C7] text-gray-900 font-semibold px-7 py-3 shadow transition hover:scale-105">
                Hubungi Kami
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M13 5l7 7-7 7"/>
                </svg>
            </a>

            <a href="/proposal" class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 backdrop-blur-sm text-white font-semibold px-7 py-3 transition hover:bg-white/20">
                Proposal Kerja Sama
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
    </div>

</section>

@push('styles')
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes zoomOut {
        from { transform: scale(1.05); }
        to   { transform: scale(1); }
    }
</style>
@endpush

@endsection
