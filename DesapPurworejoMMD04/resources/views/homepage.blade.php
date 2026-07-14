@extends('layouts.app')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="relative w-full h-[700px] overflow-hidden flex items-center justify-center">
    <div class="absolute inset-0 bg-cover bg-center animate-[zoomOut_8s_ease-out_forwards]"
        style="background-image: url('{{ asset('images/foto.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-[#0D6B1E]/80 to-[#1a4a2e]/70"></div>

    <div class="relative z-10 text-center text-white px-6 max-w-4xl mx-auto animate-[fadeInUp_1s_ease-out_forwards]">

        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-5 drop-shadow-lg">
            Selamat Datang di<br>
            <span class="text-[#f0d080]">Website Resmi</span> Desa Purworejo
        </h1>
        <p class="text-base md:text-lg text-white/85 max-w-2xl mx-auto mb-10 leading-relaxed">
            Mewujudkan Desa yang Maju, Mandiri, Sejahtera, dan Berdaya Saing melalui pelayanan publik yang transparan serta pembangunan yang berkelanjutan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <x-btn href="#tentang" varian="utama">🌿 Jelajahi Desa</x-btn>
            <x-btn href="#layanan" varian="putih">📋 Layanan Publik</x-btn>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce text-white/60">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>
</section>

{{-- ===================== STATISTIK DESA ===================== --}}
<section class="relative z-10 px-6 -mt-12">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
        <x-stat-card ikon="👥" angka="4.520" label="Jumlah Penduduk" />
        <x-stat-card ikon="🏠" angka="1.248" label="Jumlah KK" />
        <x-stat-card ikon="📐" angka="428 Ha" label="Luas Wilayah" />
        <x-stat-card ikon="🏘️" angka="6" label="Jumlah Dusun" />
    </div>
</section>

{{-- ===================== TENTANG DESA ===================== --}}
<section id="tentang" class="bg-white py-20 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="relative">
            <img src="{{ asset('images/foto.png') }}" alt="Kantor Desa"
                class="rounded-2xl shadow-xl w-full object-cover h-[400px]">
            <!-- <div class="absolute -bottom-5 -right-5 bg-[#0D6B1E] text-white rounded-xl px-5 py-3 shadow-lg text-sm font-semibold">
                🏛️ Berdiri sejak 1924
            </div> -->
        </div>
        <div>
            <x-section-header
                badge="Tentang Kami"
                judul="Membangun Masa Depan Dari Akar Tradisi"
                :kiri="true"
            />
            <p class="text-gray-600 leading-relaxed mb-4">
                Desa Purworejo merupakan sebuah komunitas yang berkembang pesat dengan menjunjung tinggi nilai-nilai kearifan lokal. Terletak di jantung Kabupaten Blitar, kami memiliki komitmen kuat untuk memajukan perekonomian desa melalui inovasi pertanian dan pemberdayaan potensi UMKM.
            </p>
            <p class="text-gray-600 leading-relaxed mb-6">
                Dengan luas wilayah yang subur dan sumber daya manusia yang unggul, kami terus bertransformasi menjadi desa digital yang transparan dan akuntabel dalam setiap pelayanan publik kepada masyarakat.
            </p>
            <x-btn href="/profil" varian="garis">Baca Selengkapnya →</x-btn>
        </div>
    </div>
</section>

{{-- ===================== POTENSI UNGGULAN ===================== --}}
<section class="bg-gray-50 py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            judul="Potensi Unggulan Desa"
            subjudul="Sinergi antara alam dan kreativitas warga yang melahirkan berbagai potensi ekonomi dan budaya luar biasa."
        />
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <x-card ikon="🌾" judul="Pertanian" deskripsi="Sektor utama dengan komoditas unggulan padi organik, palawija, dan buah-buahan musiman berkualitas tinggi." link="/potensi" linkLabel="Detail Potensi →" />
            <x-card ikon="🛍️" judul="UMKM" deskripsi="Produk lokal kreatif mulai dari kerajinan anyaman hingga olahan makanan tradisional yang menembus pasar regional." link="/potensi" linkLabel="Detail Potensi →" />
            <x-card ikon="🐄" judul="Peternakan" deskripsi="Pengembangan ternak sapi perah dan kambing dengan sistem modern yang dikelola secara kolektif oleh warga." link="/potensi" linkLabel="Detail Potensi →" />
            <x-card ikon="🎓" judul="Pendidikan" deskripsi="Fasilitas pendidikan lengkap mulai dari PAUD hingga sekolah menengah untuk mencetak generasi unggul." link="/potensi" linkLabel="Detail Potensi →" />
            <x-card ikon="🎭" judul="Budaya" deskripsi="Pelestarian seni tradisional Jaranan dan Reog yang rutin dipentaskan setiap perayaan besar desa." link="/potensi" linkLabel="Detail Potensi →" />
            <x-card ikon="⛰️" judul="Wisata Desa" deskripsi="Destinasi wisata alam sungai dan perbukitan yang menawarkan ketenangan dan udara segar pegunungan." link="/potensi" linkLabel="Detail Potensi →" />
        </div>
    </div>
</section>

{{-- ===================== BERITA TERKINI ===================== --}}
<!-- <section class="bg-white py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            badge="Kabar Desa"
            judul="Berita Terkini"
            subjudul="Informasi terbaru seputar kegiatan dan perkembangan pembangunan di Desa Purworejo."
        />
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <x-card-img
                foto="images/foto.png"
                labelFoto="Padat Karya"
                badge="Kesejahteraan"
                judul="Program Padat Karya Tunai Desa Purworejo Resmi Dimulai"
                deskripsi="Pemerintah Desa meluncurkan program pemberdayaan saluran irigasi demi melibatkan ratusan warga setempat..."
                link="#"
            />
            <x-card-img
                foto="images/foto.png"
                labelFoto="Anyaman Ekspor"
                badge="UMKM"
                judul="Produk Anyaman Purworejo Tembus Pasar Ekspor Jepang"
                deskripsi="Berawal dari pelatihan kreativitas, kini kerajinan khas desa mulai diminati oleh buyer mancanegara..."
                link="#"
            />
            <x-card-img
                foto="images/foto.png"
                labelFoto="Bersih Desa"
                badge="Budaya"
                judul="Semarak Bersih Desa Purworejo Tahun Ini Berlangsung Meriah"
                deskripsi="Ribuan warga antusias mengikuti kirab budaya dan pagelaran wayang kulit sebagai wujud syukur..."
                link="#"
            />
        </div>
    </div>
</section> -->

{{-- ===================== GALERI DESA ===================== --}}
<section class="bg-white py-20 px-6" x-data="{
    modal: false,
    activeImg: '',
    activeAlt: '',
    open(src, alt) { this.activeImg = src; this.activeAlt = alt; this.modal = true; },
    close() { this.modal = false; }
}">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            badge="Galeri"
            judul="Galeri Desa"
            subjudul="Koleksi momen keindahan alam dan kebersamaan warga Purworejo."
        />
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach([
                ['src' => 'images/foto.png', 'alt' => 'Pemandangan Desa'],
                ['src' => 'images/foto.png', 'alt' => 'Kegiatan Warga'],
                ['src' => 'images/foto.png', 'alt' => 'Sawah Desa'],
                ['src' => 'images/foto.png', 'alt' => 'Budaya Lokal'],
                ['src' => 'images/foto.png', 'alt' => 'UMKM Desa'],
                ['src' => 'images/foto.png', 'alt' => 'Wisata Desa'],
            ] as $foto)
            <div class="group relative overflow-hidden rounded-xl cursor-pointer h-48 md:h-56"
                @click="open('{{ asset($foto['src']) }}', '{{ $foto['alt'] }}')">
                <img src="{{ asset($foto['src']) }}" alt="{{ $foto['alt'] }}"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/50 transition-all duration-300 flex items-center justify-center">
                    <svg class="w-10 h-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                    </svg>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Modal --}}
    <div x-show="modal"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 bg-black/80 flex items-center justify-center p-4"
        @click.self="close()" @keydown.escape.window="close()" style="display:none;">
        <div class="relative max-w-4xl w-full">
            <button @click="close()" class="absolute -top-10 right-0 text-white text-3xl font-bold hover:text-gray-300">&times;</button>
            <img :src="activeImg" :alt="activeAlt" class="w-full max-h-[80vh] object-contain rounded-xl shadow-2xl">
            <p class="text-center text-white/70 mt-3 text-sm" x-text="activeAlt"></p>
        </div>
    </div>
</section>

{{-- ===================== LOKASI DAN KONTAK ===================== --}}
<section id="layanan" class="bg-white py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            badge="Kontak"
            judul="Lokasi & Kontak"
            subjudul="Kami siap melayani Anda. Kunjungi kantor kami atau hubungi melalui saluran berikut."
        />
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
            <div class="bg-[#0D6B1E] text-white rounded-2xl p-8 flex flex-col justify-between">
                <div class="space-y-6">
                    @foreach([
                        ['ikon' => '📍', 'label' => 'Alamat', 'nilai' => 'Jl. Raya Purworejo No. 45, Kec. Wates, Kab. Blitar, Jawa Timur 66194'],
                        ['ikon' => '📞', 'label' => 'Telepon', 'nilai' => '+62 812-3458-7890'],
                        ['ikon' => '✉️', 'label' => 'Email', 'nilai' => 'info@purworejo-blitar.desa.id'],
                        ['ikon' => '🕐', 'label' => 'Jam Operasional', 'nilai' => 'Senin – Kamis 08:00–15:00 · Jumat 08:00–11:00'],
                    ] as $kontak)
                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 rounded-lg p-2.5 mt-0.5 text-lg">{{ $kontak['ikon'] }}</div>
                        <div>
                            <p class="font-semibold text-sm text-white/70 mb-1">{{ $kontak['label'] }}</p>
                            <p class="font-medium">{{ $kontak['nilai'] }}</p>
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
            <div class="rounded-2xl overflow-hidden shadow-lg min-h-[400px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.234567890123!2d112.1234567!3d-8.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sDesa+Purworejo%2C+Wates%2C+Blitar!5e0!3m2!1sid!2sid!4v1234567890"
                    width="100%" height="100%" style="border:0; min-height:400px;"
                    allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
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
