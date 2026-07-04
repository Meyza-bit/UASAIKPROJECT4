@php
    $activeMode = request('mode', 'dewasa');
    $activeStepId = request()->route('id') ?? 1;
@endphp

<header class="sticky top-0 z-50 border-b border-gray-200 bg-white">
    <div class="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-4 sm:px-6 lg:flex-row lg:items-center lg:justify-between">
        <div class="flex min-w-0 items-start gap-3 sm:items-center sm:gap-4">
            <img
                src="{{ asset('images/logo-ump.jpeg') }}"
                alt="Logo Universitas Muhammadiyah Pontianak"
                class="h-12 w-12 shrink-0 object-contain sm:h-14 sm:w-14"
            >

            <div class="min-w-0">
                <h1 class="text-lg font-bold leading-tight text-blue-950 sm:text-2xl">
                    Tuntunan Tata Cara Sholat
                </h1>
                <div class="mt-1 text-xs leading-relaxed text-gray-500">
                    <p>Nama: Kelompok 3 Sistem Informasi 06A</p>
                    <p>Mata Kuliah: AIK 4</p>
                    <p>Dosen: Dedy Susanto S.pd., M.M</p>
                </div>
            </div>
        </div>

        <div class="flex w-full flex-col gap-3 sm:flex-row sm:items-center sm:justify-between lg:w-auto lg:justify-end lg:gap-6">
            <nav class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm font-semibold">
                <a
                    href="{{ url('/') }}"
                    class="border-b-2 pb-1 transition {{ request()->routeIs('beranda') ? 'border-blue-950 text-blue-950' : 'border-transparent text-gray-600 hover:text-blue-950' }}"
                >
                    Beranda
                </a>
                <a
                    href="{{ route('sholat.step', ['id' => $activeStepId, 'mode' => $activeMode]) }}"
                    class="border-b-2 pb-1 transition {{ request()->is('tuntunan-sholat*') ? 'border-blue-950 text-blue-950' : 'border-transparent text-gray-600 hover:text-blue-950' }}"
                >
                    Tuntunan Sholat
                </a>
            </nav>

            <div class="flex w-fit items-center rounded-full border border-gray-200 bg-gray-100 p-1 text-xs font-semibold">
                <a
                    href="{{ route('sholat.step', ['id' => $activeStepId, 'mode' => 'dewasa']) }}"
                    class="rounded-full px-4 py-1.5 transition {{ $activeMode === 'dewasa' ? 'bg-blue-950 text-white shadow-sm' : 'text-gray-500 hover:text-gray-950' }}"
                >
                    Dewasa
                </a>
                <a
                    href="{{ route('sholat.step', ['id' => $activeStepId, 'mode' => 'anak-anak']) }}"
                    class="rounded-full px-4 py-1.5 transition {{ $activeMode === 'anak-anak' ? 'bg-blue-950 text-white shadow-sm' : 'text-gray-500 hover:text-gray-950' }}"
                >
                    Anak-anak
                </a>
            </div>
        </div>
    </div>
</header>
