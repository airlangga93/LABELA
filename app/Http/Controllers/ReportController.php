<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Menampilkan daftar data resource.
     */
    public function index(Request $request)
    
    {
        $search = $request->search;

        $reports = Report::where('title', 'like', "%$search%")
            ->orWhere('location', 'like', "%$search%")
            ->orWhere('disaster_type', 'like', "%$search%")
            ->get();

        return view('report.index', compact('reports'));
    }

    /**
     * Menampilkan form untuk membuat data baru.
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Menyimpan data baru ke dalam database.
     */
    public function store(Request $request)
    {
        \App\Models\Report::create($request->all());

        return redirect('/report');
    }

    /**
     * Menampilkan detail data tertentu.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Menampilkan form untuk mengedit data tertentu.
     */
    public function edit($id)
    {
        $report = \App\Models\Report::findOrFail($id);

        return view('report.edit', compact('report'));
    }

    /**
     * Mengupdate data yang sudah ada di database.
     */
    public function update(Request $request, $id)
    {
        $report = \App\Models\Report::findOrFail($id);

        $report->update($request->all());

        return redirect('/report');
    }

    /**
     * Menghapus data dari database.
     */
    public function destroy($id)
    {
        \App\Models\Report::destroy($id);

        return redirect('/report');
    }
}