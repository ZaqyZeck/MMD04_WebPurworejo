@props(['nama', 'jabatan', 'foto' => null, 'utama' => false])

<div class="group flex flex-col items-center">
    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-4 text-center w-44 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#0D6B1E]/30 {{ $utama ? 'border-t-4 border-t-[#0D6B1E]' : '' }}">
        <div class="{{ $utama ? 'w-20 h-20' : 'w-14 h-14' }} rounded-full overflow-hidden mx-auto mb-3 border-4 {{ $utama ? 'border-[#0D6B1E]/30' : 'border-gray-100' }} group-hover:border-[#0D6B1E]/30 transition-colors duration-300">
            @if($foto)
                <img src="{{ asset($foto) }}" alt="{{ $nama }}" class="w-full h-full object-cover">
            @else
                <div class="w-full h-full bg-gradient-to-br from-[#0D6B1E]/10 to-[#0D6B1E]/20 flex items-center justify-center text-[#0D6B1E] {{ $utama ? 'text-3xl' : 'text-xl' }}">👤</div>
            @endif
        </div>
        <p class="font-bold text-gray-800 text-xs leading-tight mb-1">{{ $nama }}</p>
        <span class="inline-block bg-[#0D6B1E]/10 text-[#0D6B1E] text-[10px] font-semibold px-2 py-0.5 rounded-full leading-tight">{{ $jabatan }}</span>
    </div>
</div>
