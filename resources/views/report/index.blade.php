@extends('app')

@section('content')

<!-- Hero Section -->
<div class="bg-gradient-to-r from-orange-200 via-pink-100 to-blue-200 rounded-[40px] p-10 mb-10 shadow-xl">

    <div class="max-w-2xl">

        <h1 class="text-5xl font-black text-slate-800 leading-tight">
            Daftar Laporan Bencana
        </h1>

        <p class="text-slate-600 mt-5 text-lg">
            Informasi terbaru mengenai laporan bencana alam
            dari berbagai wilayah KalBar
        </p>

    </div>

</div>

<!-- Card Table -->
<div class="bg-white/80 backdrop-blur-xl rounded-[35px] shadow-2xl p-8 border border-white/50">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">

        <a href="/report/create"
           class="bg-gradient-to-r from-orange-400 to-yellow-300 hover:scale-105 transition text-white px-6 py-3 rounded-2xl font-semibold shadow-lg">

            + Tambah Laporan

        </a>

        <form action="/report" method="GET">

            <input type="text"
                name="search"
                placeholder="Cari laporan..."
                class="border border-slate-200 rounded-2xl px-5 py-3 w-72 focus:outline-none focus:ring-2 focus:ring-orange-300">

        </form>

    </div>

    <!-- Table -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="bg-slate-100 text-slate-700">

                    <th class="p-5 rounded-l-2xl text-left">
                        Judul
                    </th>

                    <th class="text-left">
                        Lokasi
                    </th>

                    <th class="text-left">
                        Jenis Bencana
                    </th>

                    <th class="text-left">
                        Korban
                    </th>

                    <th class="text-left">
                        Status
                    </th>

                    <th class="rounded-r-2xl text-left">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($reports as $r)

                <tr class="border-b border-slate-100 hover:bg-orange-50/50 transition">

                    <td class="p-5 font-semibold text-slate-800">
                        {{ $r->title }}
                    </td>

                    <td class="text-slate-600">
                        {{ $r->location }}
                    </td>

                    <td>

                        <span class="bg-orange-100 text-orange-500 px-4 py-2 rounded-full text-sm font-medium">

                            {{ $r->disaster_type }}

                        </span>

                    </td>

                    <td class="text-slate-600">
                        {{ $r->victims }} Orang
                    </td>

                    <td>

                        @if($r->status == 'Baru')

                            <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-medium">

                                {{ $r->status }}

                            </span>

                        @elseif($r->status == 'Proses')

                            <span class="bg-orange-100 text-orange-500 px-4 py-2 rounded-full text-sm font-medium">

                                {{ $r->status }}

                            </span>

                         @elseif($r->status == 'Selesai')

                            <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-medium">

                                {{ $r->status }}

                            </span>

                        @endif

                    </td>

                    <td class="flex gap-3 py-5">

                        <a href="/report/{{ $r->id }}/edit"
                           class="bg-yellow-100 hover:bg-yellow-200 text-yellow-600 px-4 py-2 rounded-xl transition">

                            Edit

                        </a>

                        <form action="/report/{{ $r->id }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-100 hover:bg-red-200 text-red-500 px-4 py-2 rounded-xl transition">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection