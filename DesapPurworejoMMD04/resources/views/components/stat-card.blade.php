@props(['ikon', 'angka', 'label'])

<div class="bg-white rounded-xl p-6 text-center border border-gray-100 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-default">
    <div class="text-4xl mb-3">{{ $ikon }}</div>
    <div class="text-3xl font-bold text-[#0D6B1E] mb-1">{{ $angka }}</div>
    <div class="text-gray-500 text-sm font-medium">{{ $label }}</div>
</div>
