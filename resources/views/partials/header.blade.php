<header class="border-b border-gray-200 bg-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        
        <!-- Sisi Kiri: Logo & Informasi Akademik -->
        <div class="flex items-center gap-4">
            <!-- Logo Universitas Muhammadiyah Pontianak -->
            <img src="{{ asset('images/logo-ump.jpeg') }}" 
             alt="Logo Universitas Muhammadiyah Pontianak" 
             class="w-14 h-14 object-contain shrink-0">
            
            <div>
                <h1 class="text-2xl font-bold text-blue-950 tracking-tight">Tuntunan Tata Cara Sholat</h1>
                <div class="text-xs text-gray-500 mt-1 leading-relaxed">
                    <p>Nama: Kelompok 3 Sistem Informasi 06A</p>
                    <p>Mata Kuliah: AIK 4</p>
                    <p>Dosen: Dedy Susanto S.pd., M.M</p>
                </div>
            </div>
        </div>

        <!-- Sisi Kanan: Navigasi & Switcher Kategori -->
        <div class="flex items-center gap-8 w-full md:w-auto justify-between md:justify-end">
            <nav class="flex gap-6 text-sm font-semibold">
                <a href="/beranda" class="text-blue-900 border-b-2 border-blue-900 pb-1">Beranda</a>
                <a href="/tuntunan" class="text-gray-600 hover:text-blue-900 transition">Tuntunan Sholat</a>
            </nav>
            
            <!-- Toggle Dewasa / Anak-anak -->
            <div class="bg-gray-100 p-1 rounded-full flex items-center text-xs font-semibold">
                <button class="bg-blue-950 text-white px-4 py-1.5 rounded-full shadow-sm cursor-pointer">Dewasa</button>
                <button class="text-gray-500 px-4 py-1.5 rounded-full hover:text-gray-950 transition cursor-pointer">Anak-anak</button>
            </div>
        </div>

    </div>
</header>
