@extends('app')

@section('content')

<div class="bg-white/80 backdrop-blur-xl rounded-[40px] shadow-2xl p-10 border border-white/50 overflow-hidden relative">

    <!-- Blur -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-pink-200/30 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 left-0 w-72 h-72 bg-orange-200/30 rounded-full blur-3xl"></div>

    <div class="relative z-10">

        <!-- Header -->
        <div class="mb-12">

            <p class="text-orange-500 font-semibold tracking-wide mb-3">
                HUBUNGI KAMI
            </p>

            <h1 class="text-5xl font-black text-slate-800 mb-5">
                Kontak LABELA
            </h1>

            <p class="text-slate-600 text-lg max-w-3xl">
                Jika membutuhkan bantuan atau ingin memberikan informasi,
                silakan hubungi kami melalui kontak berikut.
            </p>

        </div>

        <!-- Card -->
        <div class="grid md:grid-cols-2 gap-8">

            <!-- Instagram -->
            <div class="bg-gradient-to-br from-pink-100 to-rose-50 rounded-[35px] p-8 shadow-lg hover:scale-[1.02] transition">

                <div class="text-5xl mb-6">
                    📸
                </div>

                <p class="text-slate-500 mb-2">
                    Instagram
                </p>

                <h2 class="text-2xl font-black text-pink-500">
                    @labela.ptk
                </h2>

            </div>

            <!-- Email -->
            <div class="bg-gradient-to-br from-orange-100 to-yellow-50 rounded-[35px] p-8 shadow-lg hover:scale-[1.02] transition">

                <div class="text-5xl mb-6">
                    📧
                </div>

                <p class="text-slate-500 mb-2">
                    Email
                </p>

                <h2 class="text-2xl font-black text-orange-500">
                    labelaptk@gmail.com
                </h2>

            </div>

            <!-- Telepon -->
            <div class="bg-gradient-to-br from-blue-100 to-cyan-50 rounded-[35px] p-8 shadow-lg hover:scale-[1.02] transition">

                <div class="text-5xl mb-6">
                    📞
                </div>

                <p class="text-slate-500 mb-2">
                    Telepon
                </p>

                <h2 class="text-2xl font-black text-blue-500">
                    0812-3456-7890
                </h2>

            </div>

            <!-- Lokasi -->
            <div class="bg-gradient-to-br from-green-100 to-emerald-50 rounded-[35px] p-8 shadow-lg hover:scale-[1.02] transition">

                <div class="text-5xl mb-6">
                    📍
                </div>

                <p class="text-slate-500 mb-2">
                    Lokasi
                </p>

                <h2 class="text-2xl font-black text-green-500">
                    Jl. Jend. A. Yani No. 01 Pontianak, Kalimantan Barat
                </h2>

            </div>

        </div>

    </div>

</div>

@endsection