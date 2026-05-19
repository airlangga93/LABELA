<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>LABELA</title>

</head>

<body class="bg-gradient-to-br from-orange-50 via-pink-50 to-blue-50 min-h-screen text-slate-800">

    <!-- NAVBAR -->
    <nav class="sticky top-0 z-50 backdrop-blur-xl bg-white/70 border-b border-white/40 shadow-sm">

        <div class="max-w-7xl mx-auto px-8 py-5 flex justify-between items-center">

            <!-- Logo -->
            <a href="/"
               class="text-3xl font-black bg-gradient-to-r from-orange-500 to-yellow-400 bg-clip-text text-transparent">

                LABELA

            </a>

            <!-- Menu -->
            <div class="flex items-center gap-6">

                <a href="/"
                    class="text-slate-600 hover:text-orange-500 font-medium transition">

                    Home

                </a>

                <a href="/report"
                    class="text-slate-600 hover:text-orange-500 font-medium transition">

                    Laporan

                </a>

                <a href="/tentang"
                    class="text-slate-600 hover:text-orange-500 font-medium transition">

                    Profil

                </a>

                <a href="/kontak"
                    class="text-slate-600 hover:text-orange-500 font-medium transition">

                    Kontak

                </a>

                <a href="/report/create"
                    class="bg-gradient-to-r from-orange-400 to-yellow-300 text-white px-5 py-3 rounded-2xl font-semibold shadow-lg hover:scale-105 transition">

                    + Tambah

                </a>

            </div>

        </div>

    </nav>

    <!-- CONTENT -->
    <main class="max-w-7xl mx-auto px-8 py-10">

        @yield('content')

    </main>

    <!-- FOOTER -->
    <footer class="mt-20 relative overflow-hidden">

        <!-- Background -->
        <div class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-white">

            <!-- Blur -->
            <div class="absolute top-0 left-0 w-72 h-72 bg-orange-400/10 rounded-full blur-3xl"></div>

            <div class="absolute bottom-0 right-0 w-72 h-72 bg-pink-400/10 rounded-full blur-3xl"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-8 py-14">

                <div class="grid md:grid-cols-3 gap-10">

                    <!-- Logo -->
                    <div>

                        <h1 class="text-4xl font-black bg-gradient-to-r from-orange-400 to-yellow-300 bg-clip-text text-transparent mb-4">

                            LABELA

                        </h1>

                        <p class="text-slate-300 leading-relaxed">

                            Sistem Laporan Bencana Alam modern
                            untuk membantu pelaporan dan monitoring
                            bencana di KalBar secara cepat dan efisien.

                        </p>

                    </div>

                    <!-- Menu -->
                    <div>

                        <h2 class="text-2xl font-bold mb-5">
                            Navigasi
                        </h2>

                        <div class="flex flex-col gap-3 text-slate-300">

                            <a href="/"
                                class="hover:text-orange-400 transition">

                                🏠 Home

                            </a>

                            <a href="/report"
                                class="hover:text-orange-400 transition">

                                📄 Laporan

                            </a>

                            <a href="/tentang"
                                class="hover:text-orange-400 transition">

                                👤 Profil

                            </a>

                            <a href="/kontak"
                                class="hover:text-orange-400 transition">

                                📞 Kontak

                            </a>

                        </div>

                    </div>

                    <!-- Contact -->
                    <div>

                        <h2 class="text-2xl font-bold mb-5">
                            Kontak
                        </h2>

                        <div class="space-y-4 text-slate-300">

                            <p>
                                📸 labela.ptk
                            </p>

                            <p>
                                📧 labelaptk@gmail.com
                            </p>

                            <p>
                                📍 Jl. Jend. A. Yani No. 01 Pontianak, KalBar
                            </p>

                            <p>
                                📱 0812-3456-7890
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Bottom -->
                <div class="border-t border-slate-700 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">

                    <p class="text-slate-400 text-sm">

                        © 2026 LABELA. All rights reserved.

                    </p>

                    <p class="text-slate-500 text-sm">

                        Built by Dimaz with Laravel & Tailwind CSS

                    </p>

                </div>

            </div>

        </div>

    </footer>

</body>

</html>