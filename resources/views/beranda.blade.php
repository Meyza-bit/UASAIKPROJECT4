@extends('layouts.app')

@section('content')

    <!-- ================= HERO SECTION ================= -->
    <section class="max-w-7xl mx-auto px-6 py-12 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Teks Kiri -->
        <div class="space-y-6">
            <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-600 text-[11px] font-bold tracking-wider uppercase px-3 py-1 rounded-md border border-blue-200">
                <i class="fa-solid fa-certificate text-[10px]"></i> Terpercaya & Sunnah
            </span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                Temukan Ketenangan Dalam <br>
                <span class="text-blue-700 italic font-medium">Setiap Sujud</span> Anda.
            </h2>
            <p class="text-gray-600 leading-relaxed max-w-md text-sm">
                Hadir sebagai pendamping setia dalam menyempurnakan ibadah sholat Anda dengan panduan yang interaktif dan mendalam.
            </p>
        </div>
        
        <!-- Gambar Kanan (Visual Masjid Nabawi Seni Biru Islami - Adem & Pasti Muncul Offline) -->
        <div class="relative flex justify-center md:justify-end">
            <img src="{{ asset('images/kaabah.jpeg') }}"
                 alt="kaabah" 
                 class="rounded-2xl shadow-xl w-full max-w-135 object-cover h-80 md:h-95 bg-slate-900">
        </div>
    </section>

    <!-- ================= WHY US SECTION ================= -->
    <section class="bg-gray-50/60 border-t border-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-6">
            
            <!-- Judul & Deskripsi Atas -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4 mb-12">
                <div class="space-y-2">
                    <h3 class="text-2xl md:text-3xl font-bold text-slate-950">Mengapa Memerlukan Panduan Khushu?</h3>
                    <p class="text-gray-600 max-w-xl text-sm leading-relaxed">
                        Sholat bukan sekadar rutinitas fisik, melainkan dialog antara hamba dan Pencipta yang membutuhkan kehadiran hati sepenuhnya.
                    </p>
                </div>
                <a href="#" class="text-blue-900 hover:text-blue-700 text-xs font-bold flex items-center gap-1.5 transition whitespace-nowrap self-end md:mb-1">
                    Tujuan Utama Kami <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Grid 3 Kartu Manfaat -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Kartu 1: Akurasi Bacaan -->
                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col items-start">
                    <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-5 border border-blue-100">
                        <i class="fa-solid fa-user-shield text-sm"></i>
                    </div>
                    <h4 class="font-bold text-gray-950 mb-2">Akurasi Bacaan</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Memastikan setiap lafadz sesuai dengan tuntunan sunnah yang shahih melalui panduan audio dan teks yang presisi.
                    </p>
                </div>

                <!-- Kartu 2: Ketenangan Jiwa -->
                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col items-start">
                    <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-5 border border-blue-100">
                        <i class="fa-solid fa-dove text-sm"></i>
                    </div>
                    <h4 class="font-bold text-gray-950 mb-2">Ketenangan Jiwa</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Mengolah konsentrasi agar hati tidak berpaling saat menghadap Sang Khalik dengan teknik mindfulness Islami.
                    </p>
                </div>

                <!-- Kartu 3: Pemahaman Makna -->
                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col items-start">
                    <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-5 border border-blue-100">
                        <i class="fa-solid fa-book-open text-sm"></i>
                    </div>
                    <h4 class="font-bold text-gray-950 mb-2">Pemahaman Makna</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Mendalami arti filosofis di balik setiap gerakan mulai dari takbir hingga salam untuk ibadah yang lebih bermakna.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= QUOTE SECTION ================= -->
    <section class="bg-blue-900 text-white py-16 text-center px-6">
        <div class="max-w-3xl mx-auto space-y-5">
            <span class="text-4xl block font-serif text-blue-300 opacity-60 leading-none">”</span>
            <blockquote class="text-lg md:text-xl font-medium leading-relaxed tracking-wide">
                "Jadikanlah sabar dan shalat sebagai penolongmu. <br class="hidden md:inline">
                Dan sesungguhnya yang demikian itu sungguh berat, <br class="hidden md:inline">
                kecuali bagi orang-orang yang <span class="italic font-normal text-blue-200">khusyuk</span>."
            </blockquote>
            <p class="text-xs uppercase tracking-widest text-blue-300 font-semibold pt-2">
                — Al-Baqarah: 45
            </p>
        </div>
    </section>

@endsection\