@extends('app')

@section('content')

<div class="bg-white/80 backdrop-blur-xl rounded-[40px] shadow-2xl p-10 border border-white/50 overflow-hidden relative">

    <!-- Blur -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-orange-200/30 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl"></div>

    <div class="relative z-10">

        <!-- Header -->
        <div class="mb-12">

            <p class="text-orange-500 font-semibold tracking-wide mb-3">
                PROFIL APLIKASI
            </p>

            <h1 class="text-5xl font-black text-slate-800 mb-5">
                Tentang LABELA
            </h1>

            <p class="text-slate-600 text-lg leading-relaxed max-w-4xl">

                LABELA (Laporan Bencana Alam) adalah aplikasi berbasis web
                yang dibuat untuk membantu masyarakat KalBar dalam melaporkan
                kejadian bencana alam secara cepat dan efisien.

                Aplikasi ini memungkinkan pengguna untuk mengelola data
                laporan bencana seperti lokasi, jenis bencana, jumlah korban,
                serta status penanganan bencana.

            </p>

        </div>

        <!-- Statistik -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">

            <div class="bg-gradient-to-br from-orange-100 to-yellow-50 rounded-[30px] p-8 shadow-lg">

                <div class="text-5xl mb-5">
                    🎯
                </div>

                <h2 class="text-2xl font-black text-orange-500 mb-3">
                    Tujuan
                </h2>

                <p class="text-slate-600 leading-relaxed">
                    Membantu masyarakat KalBar dalam melaporkan kejadian bencana
                    dengan sistem yang modern dan mudah digunakan.
                </p>

            </div>

            <div class="bg-gradient-to-br from-blue-100 to-cyan-50 rounded-[30px] p-8 shadow-lg">

                <div class="text-5xl mb-5">
                    🚀
                </div>

                <h2 class="text-2xl font-black text-blue-500 mb-3">
                    Manfaat
                </h2>

                <p class="text-slate-600 leading-relaxed">
                    Mempermudah pengelolaan data bencana secara digital
                    dan membantu monitoring laporan dengan lebih cepat.
                </p>

            </div>

            <div class="bg-gradient-to-br from-green-100 to-emerald-50 rounded-[30px] p-8 shadow-lg">

                <div class="text-5xl mb-5">
                    💻
                </div>

                <h2 class="text-2xl font-black text-green-500 mb-3">
                    Teknologi
                </h2>

                <p class="text-slate-600 leading-relaxed">
                    Dibangun menggunakan Laravel, Tailwind CSS,
                    dan MySQL database modern.
                </p>

            </div>

        </div>

        <!-- Feature -->
        <div class="bg-slate-50 rounded-[35px] p-10">

            <h2 class="text-3xl font-black text-slate-800 mb-8">
                Fitur Utama
            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <div class="flex items-start gap-4">

                    <div class="bg-orange-100 text-orange-500 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl">
                        📄
                    </div>

                    <div>

                        <h3 class="font-bold text-xl text-slate-800 mb-2">
                            Kelola Laporan
                        </h3>

                        <p class="text-slate-600">
                            Menambah, mengedit, dan menghapus laporan bencana.
                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-4">

                    <div class="bg-blue-100 text-blue-500 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl">
                        🔍
                    </div>

                    <div>

                        <h3 class="font-bold text-xl text-slate-800 mb-2">
                            Pencarian Data
                        </h3>

                        <p class="text-slate-600">
                            Mempermudah pencarian laporan berdasarkan kata kunci.
                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-4">

                    <div class="bg-green-100 text-green-500 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl">
                        📊
                    </div>

                    <div>

                        <h3 class="font-bold text-xl text-slate-800 mb-2">
                            Monitoring Status
                        </h3>

                        <p class="text-slate-600">
                            Memantau perkembangan penanganan bencana.
                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-4">

                    <div class="bg-pink-100 text-pink-500 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl">
                        🌍
                    </div>

                    <div>

                        <h3 class="font-bold text-xl text-slate-800 mb-2">
                            Informasi Wilayah
                        </h3>

                        <p class="text-slate-600">
                            Menampilkan lokasi dan detail bencana secara lengkap.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection