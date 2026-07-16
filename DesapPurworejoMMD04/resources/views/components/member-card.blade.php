@props(['foto' => 'images/foto.png', 'warna' => 'green', 'nama' => '...', 'jabatan' => 'anggota', 'lebarCard' => 'p-6', 'lebarFoto' => 'w-20 h-20 mb-4'])
@php
    $warnaBorder = match($warna) {
        'kuning' => 'border-yellow-400',
        'biru'  => 'border-blue-400',
        'hijau'  => 'border-green-400',
        'hijauTua' => 'border-green-500'
    };
    if ($lebarCard === 'p-4 sm:p-6') {
        $namaClass = 'text-sm';
        $jabatanClass = 'text-xs';
    } else {
        $namaClass = 'text-lg';
        $jabatanClass = 'text-sm';
    }
@endphp

<div class="bg-white rounded-xl shadow-lg {{ $lebarCard }} text-center hover:shadow-xl transition transform hover:-translate-y-1 border-t-4 {{ $warnaBorder }}">
    <div class="{{ $lebarFoto }} bg-gray-200 rounded-full mx-auto  overflow-hidden">
        <img src="{{ asset($foto) }}" alt="{{ $nama }}" class="w-full h-full object-cover">
    </div>
    <h3 class="font-bold {{ $namaClass }}text-gray-900">{{ $nama }}</h3>
    <p class="text-green-600 {{ $jabatanClass }} font-semibold">{{ $jabatan }}</p>
</div>