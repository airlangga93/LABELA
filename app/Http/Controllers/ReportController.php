<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\Report::create($request->all());

        return redirect('/report');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $report = \App\Models\Report::findOrFail($id);

        return view('report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $report = \App\Models\Report::findOrFail($id);

        $report->update($request->all());

        return redirect('/report');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        \App\Models\Report::destroy($id);

        return redirect('/report');
    }
}
