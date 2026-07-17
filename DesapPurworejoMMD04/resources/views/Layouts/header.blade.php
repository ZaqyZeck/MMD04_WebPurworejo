<!-- <header class="w-full bg-white border-b border-gray-200">
    <div class="max-w-[1400px] mx-auto flex justify-between items-center px-[70px] py-[35px]">
        <div class="text-3xl font-bold text-[#0D6B1E]">Desa Purworejo</div>
        <nav class="flex items-center gap-10">
            <a href="/" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Beranda</a>
            <a href="/profil" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Profil Desa</a>
            <a href="/pemerintahan" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Pemerintahan</a>
            <a href="/potensi" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Potensi Desa</a>
            <a href="/contact" class="ml-5 bg-[#0D6B1E] text-white px-[38px] py-[16px] rounded-full font-semibold hover:bg-[#095516] transition-colors">Kontak</a>
        </nav>
    </div>
</header> -->


<header class="w-full bg-white border-b border-gray-200 relative">
    <div class="max-w-[1400px] mx-auto flex justify-between items-center px-4 sm:px-8 lg:px-[70px] py-4 sm:py-6 lg:py-[35px]">
        <a href="/" class="flex items-center gap-2 sm:gap-3">
            <img src="{{ asset('images/logo-desa.png') }}" alt="Logo Desa Purworejo" class="w-8 h-8 sm:w-10 sm:h-10">
            <span class="text-xl sm:text-2xl lg:text-3xl font-bold text-[#0D6B1E]">Desa Purworejo</span>
        </a>

        <!-- Menu desktop -->
        <nav class="hidden lg:flex items-center gap-10">
            <a href="/" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Beranda</a>
            <a href="/profil" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Profil Desa</a>
            <a href="/pemerintahan" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Pemerintahan</a>
            <a href="/potensi" class="text-[#444] text-lg font-medium pb-1 border-b-2 border-transparent hover:text-[#0D6B1E] hover:border-[#0D6B1E] transition-colors">Potensi Desa</a>
            <a href="/contact" class="ml-5 bg-[#0D6B1E] text-white px-[38px] py-[16px] rounded-full font-semibold hover:bg-[#095516] transition-colors">Kontak</a>
        </nav>

        <!-- Tombol hamburger (mobile & tablet) -->
        <button id="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false" class="lg:hidden p-2 text-[#0D6B1E]">
            <svg id="icon-open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Menu mobile (dropdown) -->
    <nav id="mobile-menu" class="hidden lg:hidden flex-col gap-1 px-4 sm:px-8 pb-4 border-t border-gray-100">
        <a href="/" class="block py-3 text-[#444] text-base font-medium border-b border-gray-100 hover:text-[#0D6B1E] transition-colors">Beranda</a>
        
        <a href="/profil" class="block py-3 text-[#444] text-base font-medium border-b border-gray-100 hover:text-[#0D6B1E] transition-colors">Profil Desa</a>
        <a href="/pemerintahan" class="block py-3 text-[#444] text-base font-medium border-b border-gray-100 hover:text-[#0D6B1E] transition-colors">Pemerintahan</a>
        <a href="/potensi" class="block py-3 text-[#444] text-base font-medium border-b border-gray-100 hover:text-[#0D6B1E] transition-colors">Potensi Desa</a>
        <a href="/contact" class="mt-3 bg-[#0D6B1E] text-white text-center px-6 py-3 rounded-full font-semibold hover:bg-[#095516] transition-colors">Kontak</a>
    </nav>
</header>

<script>
    (function () {
        const toggleBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');

        toggleBtn.addEventListener('click', function () {
            const isHidden = mobileMenu.classList.contains('hidden');

            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                iconOpen.classList.add('hidden');
                iconClose.classList.remove('hidden');
                toggleBtn.setAttribute('aria-expanded', 'true');
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
                toggleBtn.setAttribute('aria-expanded', 'false');
            }
        });
    })();
</script>