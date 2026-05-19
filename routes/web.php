<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', function () {

    $total = \App\Models\Report::count();

    $proses = \App\Models\Report::where('status', 'Proses')->count();

    $selesai = \App\Models\Report::where('status', 'Selesai')->count();

    return view('home', compact('total', 'proses', 'selesai'));

});

Route::resource('report', ReportController::class);

Route::view('/tentang', 'tentang');

Route::view('/kontak', 'kontak');