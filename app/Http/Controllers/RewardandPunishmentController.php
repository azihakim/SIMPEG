<?php

namespace App\Http\Controllers;

use App\Models\RewardandPunishment;
use Illuminate\Http\Request;

class RewardandPunishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('RewardandPunishment.dashboard');
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
    public function show(RewardandPunishment $rewardandPunishment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RewardandPunishment $rewardandPunishment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RewardandPunishment $rewardandPunishment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RewardandPunishment $rewardandPunishment)
    {
        //
    }
}
