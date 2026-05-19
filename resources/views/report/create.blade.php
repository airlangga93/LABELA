@extends('app')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="bg-white/80 backdrop-blur-xl rounded-[35px] shadow-2xl p-10 border border-white/50">

        <h1 class="text-4xl font-black text-slate-800 mb-8">
            Tambah Laporan
        </h1>

        <form action="/report" method="POST" class="space-y-6">

            @csrf

            <!-- Judul -->
            <div>

                <label class="block mb-2 text-slate-700 font-medium">
                    Judul Laporan
                </label>

                <input type="text"
                       name="title"
                       class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-orange-300">

            </div>

            <!-- Lokasi -->
            <div>

                <label class="block mb-2 text-slate-700 font-medium">
                    Lokasi
                </label>

                <input type="text"
                       name="location"
                       class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-orange-300">

            </div>

            <!-- Jenis -->
            <div>

                <label class="block mb-2 text-slate-700 font-medium">
                    Jenis Bencana
                </label>

                <input type="text"
                       name="disaster_type"
                       class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-orange-300">

            </div>

            <!-- Korban -->
            <div>

                <label class="block mb-2 text-slate-700 font-medium">
                    Jumlah Korban
                </label>

                <input type="number"
                       name="victims"
                       class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-orange-300">

            </div>

            <!-- Deskripsi -->
            <div>

                <label class="block mb-2 text-slate-700 font-medium">
                    Deskripsi
                </label>

                <textarea name="description"
                          rows="5"
                          class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-orange-300"></textarea>

            </div>

            <!-- Tanggal -->
            <div>

                <label class="block mb-2 text-slate-700 font-medium">
                    Tanggal Bencana
                </label>

                <input type="date"
                       name="disaster_date"
                       class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-orange-300">

            </div>

            <!-- Status -->
            <div>

                <label class="block mb-2 text-slate-700 font-medium">
                    Status
                </label>

                <select name="status"
                        class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-orange-300">

                    <option value="Baru">Baru</option>
                    <option value="Proses">Proses</option>
                    <option value="Selesai">Selesai</option>

                </select>

            </div>

            <!-- Button -->
            <button class="bg-gradient-to-r from-orange-400 to-yellow-300 hover:scale-105 transition text-white px-8 py-4 rounded-2xl font-semibold shadow-lg">

                Simpan Laporan

            </button>

        </form>

    </div>

</div>

@endsection