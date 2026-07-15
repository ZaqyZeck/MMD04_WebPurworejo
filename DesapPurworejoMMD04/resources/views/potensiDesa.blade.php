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
<section id="tentang" class="bg-[#0f2a17] py-20 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="relative">
            <img src="{{ asset('images/foto.png') }}" alt="Sawah Desa Purworejo"
                class="rounded-2xl shadow-xl w-full object-cover h-[380px]">
        </div>
        <div>
            <x-badge>Tentang Purworejo</x-badge>
            <h2 class="text-3xl md:text-4xl font-bold text-white mt-4 mb-4 leading-snug">
                Sumber Daya Alam yang Melimpah
            </h2>
            <p class="text-white/70 leading-relaxed mb-8">
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
<section class="bg-gray-50 py-16 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
        <x-stat-card ikon="🏪" angka="150+" label="UMKM Aktif" />
        <x-stat-card ikon="📐" angka="420" label="Hektar Lahan" />
        <x-stat-card ikon="🌾" angka="12" label="Produk Unggulan" />
        <x-stat-card ikon="📈" angka="85%" label="Hasil Terserap Pasar" />
    </div>
</section>

{{-- ===================== KOMODITAS UNGGULAN ===================== --}}
<section id="komoditas" class="bg-[#0f2a17] py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            judul="Komoditas Unggulan"
            subjudul="Produk pertanian pilihan dari tanah Desa Purworejo yang telah menembus pasar regional dan nasional."
        />
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <x-potensi.commodity-card ikon="🌾" judul="Padi Premium" warna="hijau"
                deskripsi="Padi varietas unggul dengan tekstur pulen dan aroma khas, dipanen 3 kali setahun." />
            <x-potensi.commodity-card ikon="🌽" judul="Jagung Manis" warna="orange"
                deskripsi="Penghasil jagung pipil kualitas ekspor untuk kebutuhan industri pakan dan pangan." />
            <x-potensi.commodity-card ikon="🎋" judul="Tebu Rakyat" warna="hijau"
                deskripsi="Pemasok utama bahan baku gula nasional dengan rendemen tinggi mencapai 8%." />
            <x-potensi.commodity-card ikon="🌶️" judul="Cabai Keriting" warna="merah"
                deskripsi="Cabai kualitas premium dengan tingkat kepedasan stabil dan daya simpan lama." />
        </div>
    </div>
</section>

{{-- ===================== EKOSISTEM UMKM ===================== --}}
<section class="bg-white py-20 px-6" x-data="{ filter: 'semua' }">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Ekosistem UMKM</h2>
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
            <x-potensi.umkm-card x-show="filter === 'semua' || filter === 'kuliner'"
                foto="images/foto.png" kategori="Kuliner" judul="Keripik Purwo Joyo"
                deskripsi="Keripik singkong renyah dengan bumbu rempah pilihan tanpa pengawet."
                labelTombol="💬 WhatsApp" warnaTombol="hijau" link="#" />
            <x-potensi.umkm-card x-show="filter === 'semua' || filter === 'kerajinan'"
                foto="images/foto.png" kategori="Kerajinan" judul="Anyaman Bambu Lestari"
                deskripsi="Produk perabot dan dekorasi rumah dari bambu dengan desain kontemporer."
                labelTombol="📷 Instagram" warnaTombol="instagram" link="#" />
            <x-potensi.umkm-card x-show="filter === 'semua' || filter === 'fashion'"
                foto="images/foto.png" kategori="Fashion" judul="Batik Purworejo Modern"
                deskripsi="Batik tulis dengan motif kontemporer yang elegan untuk berbagai suasana."
                labelTombol="🛒 Tokopedia" warnaTombol="tokopedia" link="#" />
        </div>
    </div>
</section>

{{-- ===================== DESTINASI WISATA ===================== --}}
<section class="bg-[#0f2a17] py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header
            judul="Destinasi Wisata"
        />
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <x-potensi.wisata-card foto="images/foto.png" badge="Nature Tourism"
                judul="Grojogan Sewu Purwo"
                deskripsi="Nikmati kesejukan air pegunungan dan panorama hutan pinus yang asri." link="#" />
            <x-potensi.wisata-card foto="images/foto.png" badge="Educational"
                judul="Taman Edukasi Tani"
                deskripsi="Ajak anak-anak belajar bercocok tanam langsung bersama petani lokal." link="#" />
            <x-potensi.wisata-card foto="images/foto.png" badge="Agrowisata"
                judul="Kebun Buah Purworejo"
                deskripsi="Rasakan sensasi memetik buah segar langsung dari pohonnya." link="#" />
        </div>
    </div>
</section>

{{-- ===================== KEBUDAYAAN LOKAL ===================== --}}
<section class="bg-gray-50 py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12">Kebudayaan Lokal</h2>
        <div class="space-y-14">
            <x-potensi.culture-card
                foto="images/foto.png"
                badge="Seni Pertunjukan" ikonBadge="🎭"
                judul="Jaranan Purwo Budoyo"
                deskripsi="Kesenian tradisional yang melambangkan keberanian dan semangat gotong royong warga desa. Rutin dipentaskan setiap bulan purnama di balai desa."
                link="#" :balik="false" />
            <x-potensi.culture-card
                foto="images/foto.png"
                badge="Festival Tahunan" ikonBadge="🎉"
                judul="Bersih Desa & Kirab Budaya"
                deskripsi="Perayaan rasa syukur atas hasil panen yang melimpah dengan arak-arakan hasil bumi dan doa bersama seluruh warga desa."
                link="#" :balik="true" />
        </div>
    </div>
</section>

{{-- ===================== GALERI KEGIATAN ===================== --}}
<section class="bg-[#0f2a17] py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <x-section-header judul="Galeri Kegiatan" />
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach([
                ['src' => 'images/foto.png', 'alt' => 'Panen Raya'],
                ['src' => 'images/foto.png', 'alt' => 'Jalan Desa'],
                ['src' => 'images/foto.png', 'alt' => 'Irigasi Sawah'],
                ['src' => 'images/foto.png', 'alt' => 'UMKM Kuliner'],
                ['src' => 'images/foto.png', 'alt' => 'Musyawarah Warga'],
                ['src' => 'images/foto.png', 'alt' => 'Syukuran Desa'],
            ] as $foto)
            <div class="group relative overflow-hidden rounded-xl h-48 md:h-56 cursor-pointer">
                <img src="{{ asset($foto['src']) }}" alt="{{ $foto['alt'] }}"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/50 transition-all duration-300"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== AJAKAN KOLABORASI ===================== --}}
<section class="bg-gradient-to-br from-[#0D6B1E] to-[#1a4a2e] py-20 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 leading-snug">
            Mari Bersama Mengembangkan Potensi Desa Purworejo
        </h2>
        <p class="text-white/80 max-w-2xl mx-auto mb-10 leading-relaxed">
            Kami membuka peluang kolaborasi bagi investor, akademisi, dan wisatawan untuk ikut serta dalam pertumbuhan desa kami.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <x-btn href="/kontak" varian="putih">✉️ Hubungi Kami</x-btn>
            <x-btn href="/proposal" varian="garis">Proposal Kerja Sama ⬇</x-btn>
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
