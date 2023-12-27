<?php

namespace App\Http\Controllers;

use App\Models\cutiIzin;
use Illuminate\Http\Request;

class CutiIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cuti/izin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cutiIzin $cutiIzin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cutiIzin $cutiIzin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cutiIzin $cutiIzin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cutiIzin $cutiIzin)
    {
        //
    }
}
