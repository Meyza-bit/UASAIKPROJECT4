@extends('layouts.app')

@section('title', 'Tuntunan Tata Cara Sholat')

@section('content')
@php
    // Cek apakah user sedang membuka mode anak-anak
    $isAnak = request('mode') == 'anak-anak';
@endphp

<div class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-3 items-start">
        
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
                
                <div class="text-xs sm:text-sm leading-relaxed {{ $isAnak ? 'text-amber-950 font-medium' : 'text-muted' }}">
                    {{ $currentStep['desc'] }}
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                    <div class="sm:col-span-7 relative rounded-xl overflow-hidden border {{ $isAnak ? 'border-amber-200' : 'border-line' }} bg-surface h-56 sm:h-64">
                        <img src="{{ asset($currentStep['image'] ?? '/images/sholat/default.jpg') }}" alt="Peraga Gerakan" class="w-full h-full object-contain p-2">
                        
                        <div class="absolute inset-0 bg-linear-to-t from-black/10 via-transparent to-transparent flex items-end p-3 pointer-events-none">
                            <p class="text-ink text-[11px] font-medium tracking-wide bg-white/80 px-2 py-0.5 rounded">
                                {{ $isAnak ? 'Ikuti Gerakan Ini Ya! 🙌' : 'Posisi Peraga Gerakan' }}
                            </p>
                        </div>
                    </div>

                    <div class="sm:col-span-5 flex flex-col gap-3">
                        <div class="border rounded-xl p-4 flex flex-col justify-between flex-1 
                            {{ $isAnak ? 'bg-[#e6fffa] border-[#b2f5ea]' : 'bg-white border-line' }}">
                            <div class="flex justify-between items-center">
                                <span class="text-[11px] font-bold uppercase tracking-wider {{ $isAnak ? 'text-teal-700 font-black' : 'text-primary' }}">
                                    {{ $isAnak ? 'Dengerin Suara Bacaan 🔊' : 'Audio Lafadz' }}
                                </span>
                            </div>
                            <div class="flex items-center space-x-2 bg-white/80 rounded-lg p-2 border border-line mt-2">
                                <button class="w-8 h-8 rounded-full {{ $isAnak ? 'bg-teal-500' : 'bg-primary' }} text-white flex items-center justify-center hover:opacity-90 transition cursor-pointer">
                                    <svg class="w-3.5 h-3.5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </button>
                                <div class="flex-1 bg-line h-1.5 rounded-full overflow-hidden">
                                    <div class="{{ $isAnak ? 'bg-teal-500' : 'bg-primary' }} h-full w-1/4"></div>
                                </div>
                                <span class="text-[9px] font-mono text-muted">0:02</span>
                            </div>
                        </div>

                        
                        <div class="border rounded-xl p-4 flex flex-col justify-between flex-1 
                            {{ $isAnak ? 'bg-[#fff5f5] border-[#feb2b2]' : 'bg-[#deebff] border-[#b3d4ff]' }}">
                            <span class="text-[11px] font-bold uppercase tracking-wider {{ $isAnak ? 'text-red-600 font-black' : 'text-primary' }}">
                                {{ $isAnak ? 'Lihat Video Contoh 🎬' : 'Video Panduan Gerakan' }}
                            </span>
                            
                            <a href="{{ $currentStep['video_url'] ?? 'https://www.youtube.com' }}" target="_blank" 
                            class="bg-white/70 rounded-lg flex-1 min-h-12.5 mt-2 flex items-center justify-center relative cursor-pointer group overflow-hidden border border-transparent hover:bg-white transition duration-150">
                                <div class="w-8 h-8 rounded-full {{ $isAnak ? 'bg-red-500' : 'bg-primary' }} flex items-center justify-center shadow-sm text-white group-hover:scale-110 transition">
                                    <svg class="w-3.5 h-3.5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white border {{ $isAnak ? 'border-amber-200' : 'border-line' }} rounded-xl p-6 text-center relative mt-2">
                    <span class="absolute top-2.5 left-1/2 -translate-x-1/2 text-[9px] font-bold uppercase tracking-widest text-muted">Lafadz Arab</span>
                    <div class="py-3">
                        <p class="text-3xl sm:text-4xl text-ink tracking-wide select-all" style="font-family: 'Amiri', serif; line-height: 2;">
                            {{ $currentStep['arabic'] }}
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="{{ $isAnak ? 'bg-amber-50/60 border-amber-200' : 'bg-surface/30 border-line' }} border rounded-xl p-3.5">
                        <span class="text-[9px] font-bold uppercase tracking-wider {{ $isAnak ? 'text-amber-700' : 'text-primary' }} block mb-0.5">Cara Baca</span>
                        <p class="text-xs sm:text-sm font-semibold text-ink italic leading-relaxed">
                            {{ $currentStep['transliteration'] }}
                        </p>
                    </div>

                    <div class="{{ $isAnak ? 'bg-amber-50/60 border-amber-200' : 'bg-surface/30 border-line' }} border rounded-xl p-3.5">
                        <span class="text-[9px] font-bold uppercase tracking-wider text-muted block mb-0.5">Artinya</span>
                        <p class="text-xs sm:text-sm font-medium text-muted leading-relaxed">
                            {{ $currentStep['meaning'] }}
                        </p>
                    </div>
                </div>

            </div>

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
@endsection
