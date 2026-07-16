@extends('layouts.app')

@section('content')

{{-- ===================== Hero Section ===================== --}}
<section class="relative w-full h-[600px] overflow-hidden flex items-center">
    <div class="absolute inset-0 bg-cover bg-center animate-[zoomOut_8s_ease-out_forwards]"
        style="background-image: url('{{ asset('images/foto.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-[#0D6B1E]/80 to-[#1a4a2e]/70"></div>

    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 sm:mb-6">Pemerintahan Desa</h1>
        <p class="text-base sm:text-lg md:text-xl max-w-3xl text-green-50">
            Mengenal struktur pemerintahan Desa Purworejo yang berkomitmen memberikan pelayanan terbaik kepada masyarakat.
        </p>
    </div>

</section>

{{-- ===================== Kepala Desa Section ===================== --}}
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="flex flex-col md:flex-row justify-center items-center gap-10 md:gap-20">
            <!-- Photo -->
            <div class="w-full md:flex-1 px-4 sm:px-6 md:px-11 relative flex flex-col justify-center md:justify-start items-center md:items-start">
                <div class="w-full max-w-xs sm:max-w-sm md:max-w-96 mx-auto md:mx-0 bg-white rounded-full shadow-xl outline outline-8 outline-white overflow-hidden">
                    <img src="{{ asset('images/foto.png') }}" alt="Jarno" class="self-stretch h-72 sm:h-80 md:h-96 w-full object-cover">
                </div>
            </div>

            <!-- Content -->
            <div class="w-full md:flex-1 flex flex-col justify-start items-start gap-3 px-4 sm:px-0 text-center md:text-left">
                <div class="mx-auto md:mx-0 px-6 py-1 bg-green-700/10 rounded-full">
                    <span class="text-green-900 text-sm font-medium leading-5 tracking-tight">Kepala Desa Purworejo</span>
                </div>
                <div class="pt-3 w-full">
                    <h2 class="text-zinc-900 text-2xl sm:text-3xl font-semibold leading-10">Pak Jarno</h2>
                </div>
                <div class="pb-6 md:pb-9 w-full">
                    <p class="text-neutral-700 text-sm font-medium leading-5 tracking-tight">Masa Jabatan: 2019 - 2025</p>
                </div>
                <div class="w-full pl-8 sm:pl-12 relative border-l-4 border-green-800/30 flex flex-col gap-6 text-left">
                    <div class="absolute -left-3 top-0 bg-stone-50 p-0.5">
                        <svg class="w-6 h-4 text-green-800" fill="currentColor" viewBox="0 0 24 16"><path d="M0 16V9.067C0 5.227 2.547 2.08 7.64 0l1.52 2.24C6.307 3.493 4.88 5.12 4.56 7.467H8V16H0zm12 0V9.067C12 5.227 14.547 2.08 19.64 0l1.52 2.24c-2.853 1.253-4.28 2.88-4.6 5.227H20V16h-8z"/></svg>
                    </div>
                    <p class="text-zinc-900 text-base sm:text-lg font-normal leading-7">
                        "Desa Purworejo bukan sekadar wilayah administratif, melainkan rumah bagi harmoni dan gotong royong.
                        Fokus utama kami adalah transformasi digital layanan desa dan pemberdayaan ekonomi berbasis potensi lokal
                        untuk mencapai kemandirian desa yang berkelanjutan."
                    </p>
                    <p class="text-neutral-700 text-sm sm:text-base font-normal leading-6">Melayani dengan Hati, Membangun dengan Integritas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== Struktur Organisasi Section ===================== --}}
<section id="struktur" class="py-12 sm:py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 sm:mb-4">Struktur Organisasi Pemerintah Desa</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">
                Struktur organisasi pemerintahan Desa Purworejo yang solid dan profesional
            </p>
        </div>

        <!-- Organizational Chart -->
        <div class="max-w-6xl mx-auto">
            <!-- Kepala Desa -->
            <div class="flex justify-center mb-8">
                <!-- <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition transform hover:-translate-y-1 border-t-4 border-green-600 w-full max-w-xs sm:w-64">
                    <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 overflow-hidden">
                        <img src="{{ asset('images/foto.png') }}" alt="Jarno" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">Jarno</h3>
                    <p class="text-green-600 text-sm font-semibold">Kepala Desa</p>
                </div> -->
                <x-member-card foto="images/foto.png" warna="hijauTua" nama="Jarno" jabatan="Kepala Desa" lebarCard="px-24 py-6"/>
            </div>

            <!-- Connector Line -->
            <div class="flex justify-center mb-8">
                <div class="w-0.5 h-12 bg-green-300"></div>
            </div>

            <!-- Sekretaris Desa -->
            <div class="flex justify-center mb-8">
                <!-- <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition transform hover:-translate-y-1 border-t-4 border-green-500 w-full max-w-xs sm:w-64">
                    <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 overflow-hidden">
                        <img src="{{ asset('images/foto.png') }}" alt="Lulus Gunawan" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">Lulus Gunawan</h3>
                    <p class="text-green-600 text-sm font-semibold">Sekretaris Desa</p>
                </div> -->
                <x-member-card foto="images/foto.png" warna="hijauTua" nama="Lulus Gunawan" jabatan="Sekretaris Desa" lebarCard="px-20 py-6"/>

            </div>

            <!-- Connector Line -->
            <div class="flex justify-center mb-8">
                <div class="w-0.5 h-12 bg-green-300"></div>
            </div>

            <!-- Row 1: Kasi -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
                <x-member-card foto="images/foto.png" warna="hijau" nama="Radyan Mifta R." jabatan="Kasi Pemerintahan"/>

                <x-member-card foto="images/foto.png" warna="hijau" nama="Catur Waluyo" jabatan="Kasi Kesejahteraan"/>

                <x-member-card foto="images/foto.png" warna="hijau" nama="Ezhandwhi Arie" jabatan="Kasi Pelayanan"/>

            </div>

            <!-- Connector Line -->
            <div class="flex justify-center mb-8">
                <div class="w-0.5 h-12 bg-green-300"></div>
            </div>

            <!-- Row 2: Kaur -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
                <x-member-card foto="images/foto.png" warna="biru" nama="Ayu Nila Sari" jabatan="Kaur TU & Umum"/>

                <x-member-card foto="images/foto.png" warna="biru" nama="Evi Yuni Fitriana" jabatan="Kaur Keuangan"/>

                <x-member-card foto="images/foto.png" warna="biru" nama="Andik Eko Untoro" jabatan="Kaur Perencanaan"/>

            </div>

            <!-- Connector Line -->
            <div class="flex justify-center mb-8">
                <div class="w-0.5 h-12 bg-green-300"></div>
            </div>

            <!-- Row 3: Kamituwo -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                <x-member-card foto="images/foto.png" warna="kuning" nama="Wahyudiono" jabatan="Kamituwo Dusun Sumberdadi" lebarCard="p-4 sm:p-6" lebarFoto="w-16 h-16 sm:w-20 sm:h-20 mb-3 sm:mb-4"/>
                
                <x-member-card foto="images/foto.png" warna="kuning" nama="Iswanto" jabatan="Kamituwo Dusun Sumberurip" lebarCard="p-4 sm:p-6" lebarFoto="w-16 h-16 sm:w-20 sm:h-20 mb-3 sm:mb-4"/>

                <x-member-card foto="images/foto.png" warna="kuning" nama="Prasetyadi" jabatan="Kamituwo Dusun Sumberasri" lebarCard="p-4 sm:p-6" lebarFoto="w-16 h-16 sm:w-20 sm:h-20 mb-3 sm:mb-4"/>

                <x-member-card foto="images/foto.png" warna="kuning" nama="Sutrisno" jabatan="Kamituwo Dusun Sumberejo" lebarCard="p-4 sm:p-6" lebarFoto="w-16 h-16 sm:w-20 sm:h-20 mb-3 sm:mb-4"/>

            </div>
        </div>
    </div>
</section>

{{-- ===================== Direktori RT & RW Section ===================== --}}
<section class="py-12 sm:py-16 md:py-20 bg-stone-200">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="flex flex-col md:flex-row justify-between items-stretch md:items-center gap-4 sm:gap-6 mb-10 sm:mb-16">
            <div>
                <h2 class="text-2xl sm:text-3xl font-semibold text-zinc-900 leading-10">Direktori RT &amp; RW</h2>
                <p class="text-neutral-700 text-sm sm:text-base leading-6">Hubungi pengurus kewilayahan terdekat Anda.</p>
            </div>
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                <div class="relative w-full sm:w-80">
                    <input type="text" placeholder="Cari nama atau wilayah..." class="w-full pl-10 pr-6 py-3.5 bg-stone-50 rounded-lg outline outline-1 outline-stone-300 text-gray-500 text-base focus:outline-green-600">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/></svg>
                </div>
                <button class="p-3 bg-white rounded-lg outline outline-1 outline-stone-300 hover:bg-stone-50 transition self-start sm:self-auto">
                    <svg class="w-5 h-5 text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M7 8h10M10 12h4"/></svg>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <x-directory-card rw="RW 01" dusun="Dusun Purwosari" ketua="Bp. Ahmad Junaedi" telepon="0812-3456-XXXX" rt="4 RT Terintegrasi" />

            <x-directory-card rw="RW 02" dusun="Dusun Mulyosari" ketua="Bp. Kusuma Atmaja" telepon="0821-4567-XXXX" rt="5 RT Terintegrasi" />

            <x-directory-card rw="RW 03" dusun="Dusun Rejoagung" ketua="Bp. Hendro Sasmito" telepon="0857-7890-XXXX" rt="6 RT Terintegrasi" :span="true" />
        </div>
    </div>
</section>

{{-- ===================== Lembaga Kemasyarakatan Desa ===================== --}}
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 max-w-7xl flex flex-col gap-12 sm:gap-16 md:gap-20">
        <div class="text-center">
            <h2 class="text-2xl sm:text-3xl font-semibold text-zinc-900 leading-10">Lembaga Kemasyarakatan Desa</h2>
        </div>

        <!-- Row 1: BPD & PKK -->
        <div class="flex flex-col md:flex-row justify-center items-stretch gap-6 sm:gap-10 md:gap-20">
            <!-- BPD -->
            <!-- <div class="flex-1 p-6 sm:p-8 md:p-12 bg-stone-100 rounded-xl outline outline-1 outline-stone-300 flex flex-col sm:flex-row justify-start items-center sm:items-start gap-6 md:gap-12 overflow-hidden">
                <div class="w-40 sm:w-52 md:w-60 aspect-square rounded-lg overflow-hidden shrink-0">
                    <img src="{{ asset('images/foto.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 flex flex-col justify-start items-center sm:items-start gap-1 text-center sm:text-left">
                    <h3 class="text-green-900 text-xl sm:text-2xl font-semibold leading-8">BPD</h3>
                    <p class="text-neutral-700 text-sm font-medium leading-5 tracking-tight">Badan Permusyawaratan Desa</p>
                    <p class="pt-5 text-zinc-900 text-sm sm:text-base font-normal leading-6">Mengawasi kinerja Pemerintah Desa dan menyalurkan aspirasi masyarakat untuk perencanaan</p>
                    <div class="pt-5 flex items-start gap-3 flex-wrap justify-center sm:justify-start">
                        <span class="px-3 py-1 bg-green-900/10 rounded-sm text-green-900 text-xs font-semibold leading-4">9 Anggota</span>
                        <span class="px-3 py-1 bg-green-900/10 rounded-sm text-green-900 text-xs font-semibold leading-4">Legislatif</span>
                    </div>
                    <a href="#" class="pt-5 inline-flex items-center gap-1 text-green-900 text-sm font-bold leading-5 tracking-tight">
                        Profil &amp; Agenda
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div> -->
            <x-institution-card nama="BPD" subjudul="Badan Permusyawaratan Desa" deskripsi="Mengawasi kinerja Pemerintah Desa dan menyalurkan aspirasi masyarakat untuk perencanaan." :tags="['9 Anggota', 'Legislatif']" link="#" linkLabel="Profil & Agenda" />

            <!-- PKK -->
            <!-- <div class="flex-1 p-6 sm:p-8 md:p-12 bg-stone-100 rounded-xl outline outline-1 outline-stone-300 flex flex-col sm:flex-row justify-start items-center sm:items-start gap-6 md:gap-12 overflow-hidden">
                <div class="w-40 sm:w-52 md:w-64 aspect-square rounded-lg overflow-hidden shrink-0">
                    <img src="{{ asset('images/foto.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 flex flex-col justify-start items-center sm:items-start gap-1 text-center sm:text-left">
                    <h3 class="text-green-900 text-xl sm:text-2xl font-semibold leading-8">PKK</h3>
                    <p class="text-neutral-700 text-sm font-medium leading-5 tracking-tight">Pemberdayaan Kesejahteraan Keluarga</p>
                    <p class="pt-5 text-zinc-900 text-sm sm:text-base font-normal leading-6">Meningkatkan kesejahteraan keluarga melalui 10 Program Pokok PKK, fokus pada…</p>
                    <div class="pt-5 flex items-start gap-3 flex-wrap justify-center sm:justify-start">
                        <span class="px-3 py-1 bg-green-900/10 rounded-sm text-green-900 text-xs font-semibold leading-4">Posyandu Aktif</span>
                        <span class="px-3 py-1 bg-green-900/10 rounded-sm text-green-900 text-xs font-semibold leading-4">UMKM Binaan</span>
                    </div>
                    <a href="#" class="pt-5 inline-flex items-center gap-1 text-green-900 text-sm font-bold leading-5 tracking-tight">
                        Kegiatan Terkini
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div> -->
            <x-institution-card nama="PKK" subjudul="Pemberdayaan Kesejahteraan Keluarga" deskripsi="Meningkatkan kesejahteraan keluarga melalui 10 Program Pokok PKK." :tags="['Posyandu Aktif', 'UMKM Binaan']" link="#" linkLabel="Kegiatan Terkini" />
        </div>

        <!-- Row 2: LPMD & Karang Taruna -->
        <div class="flex flex-col md:flex-row justify-center items-stretch gap-6 sm:gap-10 md:gap-20">
            <!-- LPMD -->
            <!-- <div class="flex-1 p-6 sm:p-8 md:p-12 bg-stone-100 rounded-xl outline outline-1 outline-stone-300 flex flex-col sm:flex-row justify-start items-center sm:items-start gap-6 md:gap-12">
                <div class="w-40 sm:w-44 md:w-52 aspect-square rounded-lg overflow-hidden shrink-0">
                    <img src="{{ asset('images/foto.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 flex flex-col justify-start items-center sm:items-start gap-1 text-center sm:text-left">
                    <h3 class="text-green-900 text-xl sm:text-2xl font-semibold leading-8">LPMD</h3>
                    <p class="text-neutral-700 text-sm font-medium leading-5 tracking-tight">Lembaga Pemberdayaan Masyarakat Desa</p>
                    <p class="pt-5 text-zinc-900 text-sm sm:text-base font-normal leading-6">Mitra pemerintah dalam merencanakan, melaksanakan, dan melestarikan hasil…</p>
                    <a href="#" class="pt-5 inline-flex items-center gap-1 text-green-900 text-sm font-bold leading-5 tracking-tight">
                        Laporan Pembangunan
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div> -->
            <x-institution-card nama="LPMD" subjudul="Lembaga Pemberdayaan Masyarakat Desa" deskripsi="Mitra pemerintah dalam merencanakan, melaksanakan, dan melestarikan hasil pembangunan." link="#" linkLabel="Laporan Pembangunan" lebarFoto="w-40 sm:w-44 md:w-52" />

            <!-- Karang Taruna -->
            <!-- <div class="flex-1 p-6 sm:p-8 md:p-12 bg-stone-100 rounded-xl outline outline-1 outline-stone-300 flex flex-col sm:flex-row justify-start items-center sm:items-start gap-6 md:gap-12">
                <div class="w-40 sm:w-44 md:w-48 aspect-square rounded-lg overflow-hidden shrink-0">
                    <img src="{{ asset('images/foto.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 flex flex-col justify-start items-center sm:items-start gap-1 text-center sm:text-left">
                    <h3 class="text-green-900 text-xl sm:text-2xl font-semibold leading-8">Karang Taruna</h3>
                    <p class="text-neutral-700 text-sm font-medium leading-5 tracking-tight">Organisasi Kepemudaan</p>
                    <p class="pt-5 text-zinc-900 text-sm sm:text-base font-normal leading-6">Wadah pengembangan generasi muda Desa Purworejo melalui kegiatan olahraga, seni, dan sosial.</p>
                    <a href="#" class="pt-5 inline-flex items-center gap-1 text-green-900 text-sm font-bold leading-5 tracking-tight">
                        Program Kepemudaan
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div> -->
            <x-institution-card nama="Karang Taruna" subjudul="Organisasi Kepemudaan" deskripsi="Wadah pengembangan generasi muda Desa Purworejo melalui kegiatan olahraga, seni, dan sosial." link="#" linkLabel="Program Kepemudaan" lebarFoto="w-40 sm:w-44 md:w-48" />
        </div>
    </div>
</section>

{{-- ===================== LOKASI DAN KONTAK ===================== --}}
<section id="layanan" class="bg-white py-12 sm:py-16 md:py-20 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            badge="Kontak"
            judul="Lokasi & Kontak"
            subjudul="Kami siap melayani Anda. Kunjungi kantor kami atau hubungi melalui saluran berikut."
        />
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 items-stretch">
            <div class="bg-[#0D6B1E] text-white rounded-2xl p-6 sm:p-8 flex flex-col justify-between">
                <div class="space-y-6">
                    @foreach([
                        ['ikon' => '📍', 'label' => 'Alamat', 'nilai' => 'Jl. Raya Purworejo No. 45, Kec. Wates, Kab. Blitar, Jawa Timur 66194'],
                        ['ikon' => '📞', 'label' => 'Telepon', 'nilai' => '+62 812-3458-7890'],
                        ['ikon' => '✉️', 'label' => 'Email', 'nilai' => 'info@purworejo-blitar.desa.id'],
                        ['ikon' => '🕐', 'label' => 'Jam Operasional', 'nilai' => 'Senin – Kamis 08:00–15:00 · Jumat 08:00–11:00'],
                    ] as $kontak)
                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 rounded-lg p-2.5 mt-0.5 text-lg shrink-0">{{ $kontak['ikon'] }}</div>
                        <div class="min-w-0">
                            <p class="font-semibold text-sm text-white/70 mb-1">{{ $kontak['label'] }}</p>
                            <p class="font-medium break-words">{{ $kontak['nilai'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-8 pt-6 border-t border-white/20">
                    <p class="text-sm text-white/70 mb-3 font-medium">Ikuti Kami</p>
                    <div class="flex gap-3">
                        <a href="#" class="bg-white/20 hover:bg-white/30 rounded-lg p-2.5 transition-colors" title="Facebook">
                            <svg class="w-5 h-5 fill-white" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                        </a>
                        <a href="#" class="bg-white/20 hover:bg-white/30 rounded-lg p-2.5 transition-colors" title="Instagram">
                            <svg class="w-5 h-5 stroke-white fill-none" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="white"/></svg>
                        </a>
                        <a href="#" class="bg-white/20 hover:bg-white/30 rounded-lg p-2.5 transition-colors" title="Youtube">
                            <svg class="w-5 h-5 fill-white" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#0D6B1E"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg min-h-[300px] sm:min-h-[400px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.234567890123!2d112.1234567!3d-8.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sDesa+Purworejo%2C+Wates%2C+Blitar!5e0!3m2!1sid!2sid!4v1234567890"
                    width="100%" height="100%" style="border:0; min-height:300px;"
                    allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection