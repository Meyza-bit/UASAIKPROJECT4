@extends('layouts.app')

@section('title', 'Tuntunan Tata Cara Sholat')

@section('content')
@php
    // Cek apakah user sedang membuka mode anak-anak
    $isAnak = request('mode') == 'anak-anak';
@endphp

<div class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-3 items-start">
        
        <!-- SIDEBAR: DAFTAR GERAKAN -->
        <div class="md:col-span-3 bg-transparent p-2 pr-0 md:sticky md:top-24 max-h-[calc(100vh-10rem)] overflow-y-auto">
            <div class="mb-4 px-2">
                <h3 class="text-sm font-bold tracking-tight {{ $isAnak ? 'text-amber-500 font-black' : 'text-primary' }}">
                    {{ $isAnak ? 'Panduan Sholat Anak Hebat' : 'Panduan Sholat' }}
                </h3>
                <p class="text-[11px] text-muted font-medium mt-0.5">13 Rukun Sholat</p>
            </div>

            <div class="space-y-0.5">
                @foreach($allSteps as $step)
                    <a href="{{ route('sholat.step', ['id' => $step['id'], 'mode' => request('mode')]) }}" 
                       class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-medium transition duration-150
                       {{ $currentStep['id'] == $step['id'] 
                            ? ($isAnak ? 'bg-amber-400 text-amber-950 font-black shadow-sm' : 'bg-[#deebff] text-primary font-semibold') 
                            : 'text-ink hover:bg-surface/85' }}">
                        
                        <span class="w-4 text-center font-mono text-[11px] shrink-0 {{ $currentStep['id'] == $step['id'] ? ($isAnak ? 'text-amber-950' : 'text-primary font-bold') : 'text-muted' }}">
                            {{ sprintf('%02d', $step['id']) }}
                        </span>

                        <span class="truncate tracking-wide">
                            {{ $step['title'] }} {{ $isAnak ? '✨' : '' }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- UTAMA: KONTEN GERAKAN SHOLAT -->
        <div class="md:col-span-9 bg-white border {{ $isAnak ? 'border-amber-200' : 'border-line' }} rounded-xl shadow-3xs overflow-hidden">
            
            <div class="p-5 sm:p-6 border-b {{ $isAnak ? 'bg-amber-50 border-amber-200' : 'bg-surface/50 border-line' }} flex justify-between items-start">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest {{ $isAnak ? 'text-amber-600' : 'text-muted' }}">
                        {{ $isAnak ? 'BELAJAR SHOLAT YUK! 🌟' : 'Langkah ' . sprintf('%02d', $currentStep['id']) }} — {{ $currentStep['category'] ?? 'RUKUN SHOLAT' }}
                    </p>
                    <h1 class="text-xl sm:text-2xl font-bold {{ $isAnak ? 'text-amber-900 font-black' : 'text-ink' }} mt-1 tracking-tight">
                        {{ $currentStep['title'] }} {{ $isAnak ? '🎉' : '' }}
                    </h1>
                </div>
                <span class="text-2xl font-extrabold {{ $isAnak ? 'text-amber-300' : 'text-line' }} tracking-tighter">#{{ sprintf('%02d', $currentStep['id']) }}</span>
            </div>

            <div class="p-5 sm:p-6 space-y-5">
                
                <!-- Deskripsi Gerakan -->
                <div class="text-xs sm:text-sm leading-relaxed {{ $isAnak ? 'text-amber-950 font-medium' : 'text-muted' }}">
                    {{ $currentStep['desc'] }}
                </div>

                <!-- ROW 1: Media (Gambar & Audio-Video) -->
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                    <!-- Gambar Peraga -->
                    <div class="sm:col-span-7 relative rounded-xl overflow-hidden border {{ $isAnak ? 'border-amber-200' : 'border-line' }} bg-surface h-56 sm:h-64">
                        <img src="{{ asset($currentStep['image'] ?? '/images/sholat/default.jpg') }}" alt="Peraga Gerakan" class="w-full h-full object-contain p-2">
                        
                        <div class="absolute inset-0 bg-linear-to-t from-black/10 via-transparent to-transparent flex items-end p-3 pointer-events-none">
                            <p class="text-ink text-[11px] font-medium tracking-wide bg-white/80 px-2 py-0.5 rounded">
                                {{ $isAnak ? 'Ikuti Gerakan Ini Ya! 🙌' : 'Posisi Peraga Gerakan' }}
                            </p>
                        </div>
                    </div>

                    <!-- Audio & Video Box -->
                    <div class="sm:col-span-5 flex flex-col gap-3">
                        
                        <!-- SEKSYEN AUDIO LAFADZ -->
                        <div class="border rounded-xl p-4 flex flex-col justify-between flex-1 
                            {{ $isAnak ? 'bg-[#e6fffa] border-[#b2f5ea]' : 'bg-white border-line' }}">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-[11px] font-bold uppercase tracking-wider {{ $isAnak ? 'text-teal-700 font-black' : 'text-primary' }}">
                                    {{ $isAnak ? 'Dengerin Suara Bacaan 🔊' : 'Audio Lafadz' }}
                                </span>
                            </div>
                            
                            <div class="flex items-center bg-white/80 rounded-lg p-2.5 border border-line w-full min-h-[48px]">
                                <audio id="audioLafadz" src="{{ asset($currentStep['audio'] ?? '') }}"></audio>

                                <button id="btnAudio" onclick="toggleAudio()" class="w-8 h-8 rounded-full {{ $isAnak ? 'bg-teal-500' : 'bg-blue-600' }} text-white flex items-center justify-center hover:opacity-90 transition cursor-pointer shrink-0 mr-3">
                                    <svg id="iconPlay" class="w-4 h-4 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    <svg id="iconPause" class="w-4 h-4 fill-current hidden" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                                </button>
                                
                                <div id="audioTrack" class="flex-1 bg-line h-2.5 rounded-full relative mr-3 cursor-pointer">
                                    <div id="audioProgress" class="{{ $isAnak ? 'bg-teal-500' : 'bg-blue-600' }} h-full w-0 rounded-full transition-all duration-100"></div>
                                    <div id="audioMarker" class="absolute top-1/2 left-0 w-4 h-4 -translate-x-1/2 -translate-y-1/2 rounded-full {{ $isAnak ? 'bg-teal-500 ring-teal-100' : 'bg-blue-600 ring-blue-100' }} ring-4 shadow-sm transition-all duration-100"></div>
                                </div>

                                <span id="audioTime" class="text-[9px] font-mono text-muted shrink-0 min-w-[58px] text-right">0:00 / 0:00</span>
                            </div>
                        </div>

                        <!-- SEKSYEN VIDEO PANDUAN -->
                        <div class="border rounded-xl p-4 flex flex-col justify-between flex-1 
                            {{ $isAnak ? 'bg-[#fff5f5] border-[#feb2b2]' : 'bg-[#deebff] border-[#0d6ce8]' }}">
                            <span class="text-[11px] font-bold uppercase tracking-wider {{ $isAnak ? 'text-red-600 font-black' : 'text-primary' }} mb-2">
                                {{ $isAnak ? 'Lihat Video Contoh 🎬' : 'Video Panduan Gerakan' }}
                            </span>
                            
                            <div class="rounded-lg overflow-hidden border border-line bg-black flex items-center justify-center min-h-28 max-h-32">
                                @if(!empty($currentStep['video']))
                                    <video controls class="w-full h-full object-contain">
                                        <source src="{{ asset($currentStep['video']) }}" type="video/mp4">
                                        Browser tidak mendukung pemutar video HTML5.
                                    </video>
                                @else
                                    <p class="text-white text-xs p-4 text-center leading-relaxed">
                                        {{ $currentStep['video_placeholder'] ?? 'Video belum tersedia' }}
                                    </p>
                                @endif
                            </div>

                            @if(!empty($currentStep['video_reference_url']))
                                <div class="mt-2 text-right">
                                    @if($isAnak)
                                        <a href="{{ $currentStep['video_reference_url'] }}" target="_blank" rel="noopener noreferrer" class="text-[10px] text-orange-600 hover:text-orange-700 font-bold bg-orange-50 hover:bg-orange-100 px-2 py-1 rounded-md inline-flex items-center gap-0.5 transition duration-150">
                                            <span>Nonton versi asli yuk! 🎥 ↗</span>
                                        </a>
                                    @else
                                        <a href="{{ $currentStep['video_reference_url'] }}" target="_blank" rel="noopener noreferrer" class="text-[10px] text-muted hover:text-blue-600 underline italic transition duration-150 inline-flex items-center gap-0.5">
                                            <span>Sumber Referensi Video ↗</span>
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div> <!-- PENTING: Penutup Grid Media Akhirnya Ditambahkan di Sini -->

                <!-- ROW 2: Tampilan Lafadz Arab -->
                @if(!empty($currentStep['arabic']))
                <div class="bg-white border {{ $isAnak ? 'border-amber-200' : 'border-line' }} rounded-xl p-6 text-center relative mt-2">
                    <span class="absolute top-2.5 left-1/2 -translate-x-1/2 text-[9px] font-bold uppercase tracking-widest text-muted">Lafadz Arab</span>
                    <div class="py-3">
                        <p class="text-3xl sm:text-4xl text-ink tracking-wide select-all" style="font-family: 'Amiri', serif; line-height: 2;">
                            {{ $currentStep['arabic'] }}
                        </p>
                    </div>
                </div>
                @endif

                <!-- ROW 3: Cara Baca & Arti (Menggunakan grid seimbang) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="{{ $isAnak ? 'bg-amber-50/60 border-amber-200' : 'bg-surface/30 border-line' }} border rounded-xl p-4 flex flex-col">
                        <span class="text-[9px] font-bold uppercase tracking-wider {{ $isAnak ? 'text-amber-700' : 'text-primary' }} block mb-2">Cara Baca</span>
                        <p class="text-xs sm:text-sm font-semibold text-ink italic leading-relaxed flex-1">
                            {{ $currentStep['transliteration'] ?? '-' }}
                        </p>
                    </div>

                    <div class="{{ $isAnak ? 'bg-amber-50/60 border-amber-200' : 'bg-surface/30 border-line' }} border rounded-xl p-4 flex flex-col">
                        <span class="text-[9px] font-bold uppercase tracking-wider text-muted block mb-2">Artinya</span>
                        <p class="text-xs sm:text-sm font-medium text-muted leading-relaxed flex-1">
                            {{ $currentStep['meaning'] ?? '-' }}
                        </p>
                    </div>
                </div>

            </div>

            <!-- FOOTER: NAVIGASI TOMBOL -->
            <div class="px-5 py-5 bg-white border-t {{ $isAnak ? 'border-amber-200 bg-amber-50/20' : 'border-line' }} flex justify-between items-center text-xs">
                @if($prevStep)
                    <a href="{{ route('sholat.step', ['id' => $prevStep['id'], 'mode' => request('mode')]) }}" 
                       class="inline-flex items-center space-x-1.5 px-4 py-2 border border-line rounded-lg font-medium text-ink bg-white hover:bg-surface transition duration-150">
                        ← Kembali
                    </a>
                @else
                    <div></div>
                @endif

                @if($nextStep)
                    <a href="{{ route('sholat.step', ['id' => $nextStep['id'], 'mode' => request('mode')]) }}" 
                        class="inline-flex items-center space-x-1.5 px-5 py-2 rounded-lg font-semibold text-white {{ $isAnak ? 'bg-amber-500 hover:bg-amber-600' : 'bg-blue-900 hover:bg-blue-950' }} transition duration-150">
                            <span>Lanjut: {{ $nextStep['title'] }} →</span>
                    </a>
                @else
                    <a href="/" 
                    class="inline-flex items-center space-x-1.5 px-5 py-2 rounded-lg font-semibold text-white transition duration-150 
                    {{ $isAnak ? 'bg-amber-500 hover:bg-amber-600' : 'bg-blue-900 hover:bg-blue-950' }}">
                        Selesai & Kembali 🎉
                    </a>
                @endif
            </div>

        </div>

    </div>
</div>

<!-- SCRIPT KONTROL PLAY & PROGRESS BAR AUDIO -->
<script>
    function toggleAudio() {
        const audio = document.getElementById('audioLafadz');
        const iconPlay = document.getElementById('iconPlay');
        const iconPause = document.getElementById('iconPause');

        if (audio.paused) {
            audio.play();
            iconPlay.classList.add('hidden');
            iconPause.classList.remove('hidden');
        } else {
            audio.pause();
            iconPlay.classList.remove('hidden');
            iconPause.classList.add('hidden');
        }
    }

    const audio = document.getElementById('audioLafadz');
    if (audio) {
        const progress = document.getElementById('audioProgress');
        const marker = document.getElementById('audioMarker');
        const track = document.getElementById('audioTrack');
        const timeLabel = document.getElementById('audioTime');
        const iconPlay = document.getElementById('iconPlay');
        const iconPause = document.getElementById('iconPause');

        const formatAudioTime = (seconds) => {
            if (!Number.isFinite(seconds)) return '0:00';
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60).toString().padStart(2, '0');
            return mins + ':' + secs;
        };

        const updateAudioProgress = () => {
            if (audio.duration) {
                const percentage = (audio.currentTime / audio.duration) * 100;
                progress.style.width = percentage + '%';
                marker.style.left = percentage + '%';
                timeLabel.innerText = formatAudioTime(audio.currentTime) + ' / ' + formatAudioTime(audio.duration);
            }
        };

        audio.addEventListener('loadedmetadata', updateAudioProgress);
        audio.addEventListener('timeupdate', updateAudioProgress);

        track.addEventListener('click', (event) => {
            if (!audio.duration) return;
            const rect = track.getBoundingClientRect();
            const percentage = Math.min(Math.max((event.clientX - rect.left) / rect.width, 0), 1);
            audio.currentTime = percentage * audio.duration;
            updateAudioProgress();
        });

        audio.addEventListener('ended', () => {
            iconPlay.classList.remove('hidden');
            iconPause.classList.add('hidden');
            progress.style.width = '0%';
            marker.style.left = '0%';
            timeLabel.innerText = '0:00 / ' + formatAudioTime(audio.duration);
        });
    }
</script>
@endsection