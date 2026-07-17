@extends('layouts.app')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="relative w-full h-[500px] sm:h-[550px] md:h-[600px] overflow-hidden flex items-center">
    <div class="absolute inset-0 bg-cover bg-center animate-[zoomOut_8s_ease-out_forwards]"
        style="background-image: url('{{ asset('images/foto.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-[#0D6B1E]/80 to-[#1a4a2e]/70"></div>

    <div class="relative z-10 text-white px-4 sm:px-8 lg:px-[70px] max-w-[1400px] mx-auto w-full animate-[fadeInUp_1s_ease-out_forwards]">
        <div class="max-w-2xl">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-4 sm:mb-5 drop-shadow-lg">
                Profil Desa Purworejo
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-white/85 mb-6 sm:mb-10 leading-relaxed">
                Mengenal lebih dekat sejarah, visi, pemerintahan, dan potensi Desa Purworejo, Kecamatan Wates, Kabupaten Blitar.
            </p>
        </div>
    </div>
</section>

{{-- ===================== TENTANG KAMI SECTION ===================== --}}
<section class="w-full py-12 sm:py-16 md:py-20">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-8 lg:px-[70px] flex flex-col md:flex-row items-center gap-10 md:gap-20">

        {{-- Gambar kiri --}}
        <div class="w-full md:flex-1 relative">
            <div class="hidden md:block absolute inset-0 -rotate-2 bg-green-300/20 rounded-xl"></div>
            <img class="relative w-full h-64 sm:h-80 md:h-96 object-cover rounded-xl shadow-xl" src="{{ asset('images/foto.png') }}" alt="Desa Purworejo">
        </div>

        {{-- Konten kanan --}}
        <div class="w-full md:flex-1 flex flex-col items-start gap-4 sm:gap-6">
            <span class="text-green-900 text-xs font-bold uppercase tracking-wider">Tentang Kami</span>
            <h2 class="text-2xl sm:text-3xl font-semibold text-zinc-900 leading-tight sm:leading-10">Harmoni dalam Tradisi, Unggul dalam Pelayanan</h2>
            <p class="text-neutral-700 text-sm sm:text-base leading-6">
                Desa Purworejo merupakan salah satu pusat agrikultur di wilayah Wates, Blitar. Berdiri sejak masa kolonial,
                desa ini bertransformasi menjadi kawasan yang mandiri dengan tetap mempertahankan kearifan lokal
                masyarakatnya yang gotong royong.
            </p>

            {{-- Stats --}}
            <div class="self-stretch py-6 border-t border-b border-stone-300/30 grid grid-cols-2 gap-4">
                <div>
                    <p class="text-neutral-700 text-xs font-semibold">Tahun Berdiri</p>
                    <p class="text-green-900 text-lg font-bold">1924</p>
                </div>
                <div>
                    <p class="text-neutral-700 text-xs font-semibold">Luas Wilayah</p>
                    <p class="text-green-900 text-lg font-bold">452.5 Ha</p>
                </div>
                <div>
                    <p class="text-neutral-700 text-xs font-semibold">Jumlah Dusun</p>
                    <p class="text-green-900 text-lg font-bold">4 Dusun Utama</p>
                </div>
                <div>
                    <p class="text-neutral-700 text-xs font-semibold">Kecamatan</p>
                    <p class="text-green-900 text-lg font-bold">Wates, Blitar</p>
                </div>
            </div>

            <a href="#" class="inline-flex items-center gap-2 text-green-900 text-base font-bold">
                Selengkapnya
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>

{{-- ===================== SEJARAH SECTION ===================== --}}
<!-- <section class="w-full py-12 sm:py-16 md:py-20 bg-stone-100">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-8 lg:px-[70px] flex flex-col gap-8 sm:gap-12">

        {{-- Header --}}
        <div class="flex flex-col items-center gap-2 text-center">
            <h2 class="text-2xl sm:text-3xl font-semibold text-zinc-900">Jejak Langkah Sejarah</h2>
            <p class="text-neutral-700 text-sm sm:text-base">Perjalanan panjang Desa Purworejo dari masa ke masa</p>
        </div>

        {{-- Timeline cards: scroll di mobile, grid di desktop --}}
        <div class="flex overflow-x-auto md:grid md:grid-cols-4 gap-6 pb-2" style="scrollbar-width: thin;">

            @foreach([
                ['tahun' => '1924', 'judul' => 'Pecah Alas Purworejo', 'desk' => 'Pembukaan lahan pertama oleh tetua desa untuk pemukiman agraris.', 'aktif' => false],
                ['tahun' => '1968', 'judul' => 'Pembangunan Balai Desa', 'desk' => 'Pusat pemerintahan desa resmi didirikan secara swadaya masyarakat.', 'aktif' => false],
                ['tahun' => '2005', 'judul' => 'Era Pendidikan Modern', 'desk' => 'Peningkatan fasilitas sekolah dasar dan PAUD untuk mencerdaskan anak desa.', 'aktif' => false],
                ['tahun' => '2024', 'judul' => 'Desa Mandiri Digital', 'desk' => 'Transformasi pelayanan publik berbasis teknologi dan keterbukaan informasi.', 'aktif' => true],
            ] as $langkah)
            <div class="relative flex flex-col flex-shrink-0 w-64 md:w-auto pt-14">
                <div class="absolute top-0 left-0 size-12 rounded-full flex justify-center items-center z-10 shadow-[0px_0px_0px_6px_rgba(252,249,248,1.00)] {{ $langkah['aktif'] ? 'bg-green-300' : 'bg-green-900' }}">
                    <span class="text-sm font-bold {{ $langkah['aktif'] ? 'text-green-900' : 'text-white' }}">{{ $langkah['tahun'] }}</span>
                </div>
                <div class="flex-1 p-5 rounded-xl flex flex-col gap-3 {{ $langkah['aktif'] ? 'bg-green-900 shadow-xl' : 'bg-stone-50 shadow-sm outline outline-1 outline-offset-[-1px] outline-stone-300/20' }}">
                    <img class="w-full h-36 object-cover rounded-lg" src="{{ asset('images/foto.png') }}" alt="{{ $langkah['judul'] }}">
                    <h3 class="text-base font-bold {{ $langkah['aktif'] ? 'text-green-200' : 'text-green-900' }}">{{ $langkah['judul'] }}</h3>
                    <p class="text-sm leading-5 {{ $langkah['aktif'] ? 'text-green-200/80' : 'text-neutral-700' }}">{{ $langkah['desk'] }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section> -->

<section class="w-full py-12 sm:py-16 md:py-20 bg-stone-100">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-8 lg:px-[70px] flex flex-col gap-8 sm:gap-12">

        {{-- Header --}}
        <div class="flex flex-col items-center gap-2 text-center">
            <h2 class="text-2xl sm:text-3xl font-semibold text-zinc-900">Jejak Langkah Sejarah</h2>
            <p class="text-neutral-700 text-sm sm:text-base">Perjalanan panjang Desa Purworejo dari masa ke masa</p>
        </div>

        {{-- Timeline cards: scroll di mobile, grid di desktop --}}
        <div class="relative flex overflow-x-auto md:grid md:grid-cols-4 gap-6 pb-2" style="scrollbar-width: thin;">

            {{-- Garis penghubung antar lingkaran tahun (di belakang lingkaran, hanya di desktop) --}}
            <div class="hidden md:block absolute top-6 left-0 right-0 h-0.5 bg-stone-300 z-0"></div>

            @foreach([
                ['tahun' => '1924', 'judul' => 'Pecah Alas Purworejo', 'desk' => 'Pembukaan lahan pertama oleh tetua desa untuk pemukiman agraris.'],
                ['tahun' => '1968', 'judul' => 'Pembangunan Balai Desa', 'desk' => 'Pusat pemerintahan desa resmi didirikan secara swadaya masyarakat.'],
                ['tahun' => '2005', 'judul' => 'Era Pendidikan Modern', 'desk' => 'Peningkatan fasilitas sekolah dasar dan PAUD untuk mencerdaskan anak desa.'],
                ['tahun' => '2024', 'judul' => 'Desa Mandiri Digital', 'desk' => 'Transformasi pelayanan publik berbasis teknologi dan keterbukaan informasi.'],
            ] as $langkah)
            <div class="group relative flex flex-col flex-shrink-0 w-64 md:w-auto pt-14 z-10">
                <div class="absolute top-0 left-0 size-12 rounded-full flex justify-center items-center z-10 shadow-[0px_0px_0px_6px_rgba(244,244,245,1.00)]
                            bg-stone-50 outline outline-2 outline-green-900/40 transition-colors duration-300
                            group-hover:bg-green-900 group-hover:outline-green-900">
                    <span class="text-sm font-bold text-green-900 transition-colors duration-300 group-hover:text-white">{{ $langkah['tahun'] }}</span>
                </div>
                <div class="flex-1 p-5 rounded-xl flex flex-col gap-3 bg-stone-50 shadow-sm outline outline-1 outline-offset-[-1px] outline-stone-300/20
                            transition-all duration-300 group-hover:shadow-xl group-hover:outline-green-900/30">
                    <img class="w-full h-36 object-cover rounded-lg" src="{{ asset('images/foto.png') }}" alt="{{ $langkah['judul'] }}">
                    <h3 class="text-base font-bold text-green-900">{{ $langkah['judul'] }}</h3>
                    <p class="text-sm leading-5 text-neutral-700">{{ $langkah['desk'] }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- ===================== VISI MISI SECTION ===================== --}}
<section class="w-full py-12 sm:py-16 md:py-20">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-8 lg:px-[70px] grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10 items-stretch">

        {{-- VISI (kiri) --}}
        <div class="md:col-span-1 p-8 sm:p-10 relative bg-green-700 rounded-xl shadow-2xl flex flex-col gap-6 overflow-hidden">
            <span class="text-green-200/70 text-xs font-bold uppercase tracking-wider">Visi Utama</span>
            <p class="text-green-200 text-xl sm:text-2xl font-semibold leading-8">
                "Mewujudkan Desa Purworejo yang Mandiri, Sejahtera, dan Berakhlak Mulia melalui Tata Kelola Pemerintahan
                yang Transparan dan Inovatif."
            </p>
            <div class="pt-2 flex items-center gap-3">
                <span class="w-7 h-0.5 bg-green-300"></span>
                <span class="text-green-200 text-sm font-bold">Rencana Strategis 2024-2029</span>
            </div>
        </div>

        {{-- MISI (kanan 2 kolom) --}}
        <div class="md:col-span-2 flex flex-col gap-6">
            <div>
                <h2 class="text-2xl sm:text-3xl font-semibold text-zinc-900">Misi Pembangunan</h2>
                <p class="text-neutral-700 text-sm sm:text-base mt-1">Langkah konkret dalam mencapai tujuan bersama</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                @foreach([
                    ['warna' => 'bg-green-300/30 text-green-900', 'judul' => 'Reformasi Birokrasi', 'desk' => 'Meningkatkan kualitas pelayanan publik melalui digitalisasi dan transparansi anggaran.'],
                    ['warna' => 'bg-green-300/30 text-green-800', 'judul' => 'Ketahanan Pangan', 'desk' => 'Mengoptimalkan potensi pertanian desa dengan teknologi tepat guna bagi petani.'],
                    ['warna' => 'bg-orange-200/30 text-yellow-800', 'judul' => 'Kesejahteraan Sosial', 'desk' => 'Menjamin akses kesehatan dan pendidikan bagi seluruh lapisan masyarakat tanpa terkecuali.'],
                    ['warna' => 'bg-green-300/30 text-green-900', 'judul' => 'Pengembangan Potensi', 'desk' => 'Membangun unit usaha desa dan destinasi wisata lokal yang berkelanjutan.'],
                ] as $misi)
                <div class="p-6 bg-stone-50 rounded-xl outline outline-1 outline-offset-[-1px] outline-stone-300/30 flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-lg flex justify-center items-center {{ $misi['warna'] }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="pt-2 text-zinc-900 text-base font-bold">{{ $misi['judul'] }}</h3>
                    <p class="text-neutral-700 text-sm leading-5">{{ $misi['desk'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

@endsection