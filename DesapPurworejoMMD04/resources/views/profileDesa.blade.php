@extends('layouts.app')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="relative w-full h-[600px] overflow-hidden flex items-center">
    <div class="absolute inset-0 bg-cover bg-center animate-[zoomOut_8s_ease-out_forwards]"
        style="background-image: url('{{ asset('images/foto.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-[#0D6B1E]/80 to-[#1a4a2e]/70"></div>

    <div class="relative z-10 text-white px-6 max-w-6xl mx-auto w-full animate-[fadeInUp_1s_ease-out_forwards]">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-5 drop-shadow-lg">
                Profil Desa Purworejo
            </h1>
            <p class="text-base md:text-lg text-white/85 mb-10 leading-relaxed">
                Mengenal lebih dekat sejarah, visi, pemerintahan, dan potensi Desa Purworejo, Kecamatan Wates, Kabupaten Blitar.
            </p>
        </div>
    </div>
</section>

{{-- ===================== TENTANG KAMI SECTION ===================== --}}
<section class="w-full py-16">
    <div class="max-w-[1280px] mx-auto px-6 md:px-16 flex flex-col md:flex-row items-center gap-20">

        {{-- Gambar kiri --}}
        <div class="flex-1 relative">
            <div class="absolute inset-0 -rotate-2 bg-green-300/20 rounded-xl"></div>
            <img class="relative w-full h-96 object-cover rounded-xl shadow-[0px_8px_10px_-6px_rgba(0,0,0,0.10)] shadow-xl" src="https://placehold.co/536x400" />
        </div>

        {{-- Konten kanan --}}
        <div class="flex-1 pt-1.5 flex flex-col justify-start items-start gap-6">
            <div class="text-green-900 text-xs font-bold font-['Inter'] uppercase leading-4 tracking-wider">TENTANG KAMI</div>
            <div class="text-zinc-900 text-3xl font-semibold font-['Inter'] leading-10">Harmoni dalam Tradisi, Unggul<br/>dalam Pelayanan</div>
            <div class="text-neutral-700 text-base font-normal font-['Inter'] leading-6">Desa Purworejo merupakan salah satu pusat agrikultur di wilayah Wates, Blitar. Berdiri sejak masa kolonial, desa ini bertransformasi menjadi kawasan yang mandiri dengan tetap mempertahankan kearifan lokal masyarakatnya yang gotong royong.</div>

            {{-- Stats --}}
            <div class="self-stretch py-6 border-t border-b border-stone-300/30 grid grid-cols-2 gap-4">
                <div>
                    <div class="text-neutral-700 text-xs font-semibold font-['Inter'] leading-4">Tahun Berdiri</div>
                    <div class="text-green-900 text-lg font-bold font-['Inter'] leading-7">1924</div>
                </div>
                <div>
                    <div class="text-neutral-700 text-xs font-semibold font-['Inter'] leading-4">Luas Wilayah</div>
                    <div class="text-green-900 text-lg font-bold font-['Inter'] leading-7">452.5 Ha</div>
                </div>
                <div>
                    <div class="text-neutral-700 text-xs font-semibold font-['Inter'] leading-4">Jumlah Dusun</div>
                    <div class="text-green-900 text-lg font-bold font-['Inter'] leading-7">4 Dusun Utama</div>
                </div>
                <div>
                    <div class="text-neutral-700 text-xs font-semibold font-['Inter'] leading-4">Kecamatan</div>
                    <div class="text-green-900 text-lg font-bold font-['Inter'] leading-7">Wates, Blitar</div>
                </div>
            </div>

            <div class="inline-flex justify-start items-center gap-3">
                <div class="text-green-900 text-base font-bold font-['Inter'] leading-6">Selengkapnya</div>
                <div class="size-4 bg-green-900"></div>
            </div>
        </div>

    </div>
</section>

{{-- ===================== SEJARAH SECTION ===================== --}}
<section class="w-full py-20 bg-stone-100">
    <div class="max-w-[1280px] mx-auto px-6 md:px-16 flex flex-col gap-12">

        {{-- Header --}}
        <div class="flex flex-col items-center gap-2 text-center">
            <div class="text-zinc-900 text-3xl font-semibold font-['Inter'] leading-10">Jejak Langkah Sejarah</div>
            <div class="text-neutral-700 text-base font-normal font-['Inter'] leading-6">Perjalanan panjang Desa Purworejo dari masa ke masa</div>
        </div>

        {{-- Timeline cards: scroll di mobile, grid di desktop --}}
        <div class="flex overflow-x-auto md:grid md:grid-cols-4 gap-6 pb-2" style="scrollbar-width: thin;">

            {{-- 1924 --}}
            <div class="relative flex flex-col flex-shrink-0 w-64 md:w-auto pt-14">
                <div class="absolute top-0 left-0 size-12 bg-green-900 rounded-full flex justify-center items-center z-10 shadow-[0px_0px_0px_6px_rgba(252,249,248,1.00)]">
                    <span class="text-white text-sm font-bold font-['Inter']">1924</span>
                </div>
                <div class="flex-1 p-5 bg-stone-50 rounded-xl shadow-sm outline outline-1 outline-offset-[-1px] outline-stone-300/20 flex flex-col gap-3">
                    <img class="w-full h-36 object-cover rounded-lg" src="https://placehold.co/250x169" />
                    <div class="text-green-900 text-base font-bold font-['Inter'] leading-6">Pecah Alas Purworejo</div>
                    <div class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5">Pembukaan lahan pertama oleh tetua desa untuk pemukiman agraris.</div>
                </div>
            </div>

            {{-- 1968 --}}
            <div class="relative flex flex-col flex-shrink-0 w-64 md:w-auto pt-14">
                <div class="absolute top-0 left-0 size-12 bg-green-900 rounded-full flex justify-center items-center z-10 shadow-[0px_0px_0px_6px_rgba(252,249,248,1.00)]">
                    <span class="text-white text-sm font-bold font-['Inter']">1968</span>
                </div>
                <div class="flex-1 p-5 bg-stone-50 rounded-xl shadow-sm outline outline-1 outline-offset-[-1px] outline-stone-300/20 flex flex-col gap-3">
                    <img class="w-full h-36 object-cover rounded-lg" src="https://placehold.co/250x169" />
                    <div class="text-green-900 text-base font-bold font-['Inter'] leading-6">Pembangunan Balai Desa</div>
                    <div class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5">Pusat pemerintahan desa resmi didirikan secara swadaya masyarakat.</div>
                </div>
            </div>

            {{-- 2005 --}}
            <div class="relative flex flex-col flex-shrink-0 w-64 md:w-auto pt-14">
                <div class="absolute top-0 left-0 size-12 bg-green-900 rounded-full flex justify-center items-center z-10 shadow-[0px_0px_0px_6px_rgba(252,249,248,1.00)]">
                    <span class="text-white text-sm font-bold font-['Inter']">2005</span>
                </div>
                <div class="flex-1 p-5 bg-stone-50 rounded-xl shadow-sm outline outline-1 outline-offset-[-1px] outline-stone-300/20 flex flex-col gap-3">
                    <img class="w-full h-36 object-cover rounded-lg" src="https://placehold.co/250x169" />
                    <div class="text-green-900 text-base font-bold font-['Inter'] leading-6">Era Pendidikan Modern</div>
                    <div class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5">Peningkatan fasilitas sekolah dasar dan PAUD untuk mencerdaskan anak desa.</div>
                </div>
            </div>

            {{-- 2024 --}}
            <div class="relative flex flex-col flex-shrink-0 w-64 md:w-auto pt-14">
                <div class="absolute top-0 left-0 size-12 bg-green-300 rounded-full flex justify-center items-center z-10 shadow-[0px_0px_0px_6px_rgba(252,249,248,1.00)]">
                    <span class="text-green-900 text-sm font-bold font-['Inter']">2024</span>
                </div>
                <div class="flex-1 p-5 bg-green-900 rounded-xl shadow-xl flex flex-col gap-3">
                    <img class="w-full h-36 object-cover rounded-lg" src="https://placehold.co/244x160" />
                    <div class="text-green-200 text-base font-bold font-['Inter'] leading-6">Desa Mandiri Digital</div>
                    <div class="text-green-200/80 text-sm font-medium font-['Inter'] leading-5">Transformasi pelayanan publik berbasis teknologi dan keterbukaan informasi.</div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===================== VISI MISI SECTION ===================== --}}
<section class="w-full py-20 px-16">
    <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">

        {{-- VISI (kiri) --}}
        <div class="col-span-1 p-10 relative bg-green-700 rounded-xl shadow-2xl flex flex-col gap-6 overflow-hidden">
            <div class="opacity-70">
                <div class="text-green-200 text-xs font-bold font-['Inter'] uppercase leading-4 tracking-wider">VISI UTAMA</div>
            </div>
            <div class="text-green-200 text-2xl font-semibold font-['Inter'] leading-8">"Mewujudkan Desa Purworejo yang Mandiri, Sejahtera, dan Berakhlak Mulia melalui Tata Kelola Pemerintahan yang Transparan dan Inovatif."</div>
            <div class="pt-2 flex items-center gap-3">
                <div class="w-7 h-0.5 bg-green-300"></div>
                <div class="text-green-200 text-sm font-bold font-['Inter'] leading-5 tracking-tight">Rencana Strategis 2024-2029</div>
            </div>
        </div>

        {{-- MISI (kanan 2 kolom) --}}
        <div class="col-span-2 flex flex-col gap-6">
            <div>
                <div class="text-zinc-900 text-3xl font-semibold font-['Inter'] leading-10">Misi Pembangunan</div>
                <div class="text-neutral-700 text-base font-normal font-['Inter'] leading-6">Langkah konkret dalam mencapai tujuan bersama</div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="p-6 bg-stone-50 rounded-xl outline outline-1 outline-offset-[-1px] outline-stone-300/30 flex flex-col gap-2">
                    <div class="size-10 bg-green-300/30 rounded-lg flex justify-center items-center">
                        <div class="size-5 bg-green-900"></div>
                    </div>
                    <div class="pt-2 text-zinc-900 text-base font-bold font-['Inter'] leading-6">Reformasi Birokrasi</div>
                    <div class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5 tracking-tight">Meningkatkan kualitas pelayanan publik melalui digitalisasi dan transparansi anggaran.</div>
                </div>
                <div class="p-6 bg-stone-50 rounded-xl outline outline-1 outline-offset-[-1px] outline-stone-300/30 flex flex-col gap-2">
                    <div class="size-10 bg-green-300/30 rounded-lg flex justify-center items-center">
                        <div class="w-5 h-4 bg-green-800"></div>
                    </div>
                    <div class="pt-2 text-zinc-900 text-base font-bold font-['Inter'] leading-6">Ketahanan Pangan</div>
                    <div class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5 tracking-tight">Mengoptimalkan potensi pertanian desa dengan teknologi tepat guna bagi petani.</div>
                </div>
                <div class="p-6 bg-stone-50 rounded-xl outline outline-1 outline-offset-[-1px] outline-stone-300/30 flex flex-col gap-2">
                    <div class="size-10 bg-orange-200/30 rounded-lg flex justify-center items-center">
                        <div class="size-5 bg-yellow-800"></div>
                    </div>
                    <div class="pt-2 text-zinc-900 text-base font-bold font-['Inter'] leading-6">Kesejahteraan Sosial</div>
                    <div class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5 tracking-tight">Menjamin akses kesehatan dan pendidikan bagi seluruh lapisan masyarakat tanpa terkecuali.</div>
                </div>
                <div class="p-6 bg-stone-50 rounded-xl outline outline-1 outline-offset-[-1px] outline-stone-300/30 flex flex-col gap-2">
                    <div class="size-10 bg-green-300/30 rounded-lg flex justify-center items-center">
                        <div class="size-5 bg-green-900"></div>
                    </div>
                    <div class="pt-2 text-zinc-900 text-base font-bold font-['Inter'] leading-6">Pengembangan Potensi</div>
                    <div class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5 tracking-tight">Membangun unit usaha desa dan destinasi wisata lokal yang berkelanjutan.</div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
