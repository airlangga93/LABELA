@extends('app')

@section('content')

<!-- Hero -->
<div class="bg-gradient-to-r from-blue-200 via-purple-100 to-pink-200 rounded-[40px] p-10 shadow-xl mb-10">

    <div class="max-w-2xl">

        <h1 class="text-5xl font-black text-slate-800 leading-tight">
            LABELA
        </h1>

        <p class="text-xl text-slate-600 mt-4">
            Sistem Laporan Bencana Alam modern untuk membantu
            pelaporan dan monitoring bencana di KalBar secara cepat & efisien.
        </p>

        <a href="/report"
           class="inline-block mt-8 bg-gradient-to-r from-orange-400 to-yellow-300 text-white px-8 py-4 rounded-2xl font-semibold shadow-lg hover:scale-105 transition">

            Lihat Laporan

        </a>

    </div>

</div>

<!-- Statistik -->
<div class="grid md:grid-cols-3 gap-8">

    <!-- Total -->
    <div class="bg-white/80 backdrop-blur-xl rounded-[30px] p-8 shadow-xl">

        <p class="text-slate-500 mb-3">
            Total Laporan
        </p>

        <h1 class="text-5xl font-black text-slate-800">
            {{ $total }}
        </h1>

    </div>

    <!-- Proses -->
    <div class="bg-white/80 backdrop-blur-xl rounded-[30px] p-8 shadow-xl">

        <p class="text-slate-500 mb-3">
            Sedang Diproses
        </p>

        <h1 class="text-5xl font-black text-orange-500">
            {{ $proses }}
        </h1>

    </div>

    <!-- Selesai -->
    <div class="bg-white/80 backdrop-blur-xl rounded-[30px] p-8 shadow-xl">

        <p class="text-slate-500 mb-3">
            Selesai
        </p>

        <h1 class="text-5xl font-black text-green-500">
            {{ $selesai }}
        </h1>

    </div>

</div>

@endsection