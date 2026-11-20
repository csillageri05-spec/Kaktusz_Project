<?php

namespace App\Http\Controllers;

use App\Models\Cactus;
use App\Http\Requests\StoreCactusRequest;
use App\Http\Requests\UpdateCactusRequest;

class CactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCactusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cactus $cactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cactus $cactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCactusRequest $request, Cactus $cactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cactus $cactus)
    {
        //
    }
}
