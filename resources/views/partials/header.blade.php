<header class="bg-white border-b border-line sticky top-0 z-10">
    <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <img src="/logo.png" alt="Logo" class="w-10 h-10 object-contain"
                 onerror="this.style.display='none'">
            <div>
                <h1 class="text-base font-semibold text-primary leading-tight">Tuntunan Tata Cara Sholat</h1>
                <p class="text-[11px] text-muted leading-snug mt-0.5">
                    Nama: Kelompok 3 Sistem Informasi 06A<br>
                    Mata Kuliah: AIK 4 · Dosen: Dedy Susanto, S.Pd., M.M
                </p>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <nav class="hidden md:flex items-center gap-6 text-sm self-stretch">
                <!-- Menu Beranda -->
                <a href="/" class="flex items-center h-full border-b-2 {{ Request::is('/') ? 'border-primary text-primary font-semibold' : 'border-transparent text-muted hover:text-ink' }} transition-all duration-200">
                    Beranda
                </a>
                
                <!-- Menu Tuntunan Sholat dengan Garis Bawah Aktif -->
                <a href="{{ route('sholat.step', ['id' => $currentStep['id'] ?? 1, 'mode' => $mode ?? 'dewasa']) }}" 
                class="flex items-center h-full border-b-2 {{ Request::is('tuntunan-sholat*') ? 'border-primary text-primary font-semibold' : 'border-transparent text-muted hover:text-ink' }} transition-all duration-200">
                    Tuntunan Sholat
                </a>
            </nav>
                        
            <!-- Tombol Kategori Mode Aktif (Dinamis via URL Query Parameter) -->
            <div class="flex items-center rounded-full bg-surface border border-line p-0.5 text-xs">
                <!-- Tombol Mode Dewasa -->
                <a href="{{ route('sholat.step', ['id' => $currentStep['id'] ?? 1, 'mode' => 'dewasa']) }}" 
                   class="px-3 py-1 rounded-full transition {{ ($mode ?? 'dewasa') == 'dewasa' ? 'bg-primary text-white font-medium' : 'text-muted hover:text-ink' }}">
                    Dewasa
                </a>
                
                <!-- Tombol Mode Anak-anak -->
                <a href="{{ route('sholat.step', ['id' => $currentStep['id'] ?? 1, 'mode' => 'anak-anak']) }}" 
                   class="px-3 py-1 rounded-full transition {{ ($mode ?? 'dewasa') == 'anak-anak' ? 'bg-primary text-white font-medium' : 'text-muted hover:text-ink' }}">
                    Anak-anak
                </a>
            </div>
        </div>
    </div>
</header>