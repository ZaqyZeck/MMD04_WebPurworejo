<?php

namespace App\Http\Controllers;

use App\Models\ExampleModel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage');
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
    public function show(ExampleModel $exampleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExampleModel $exampleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExampleModel $exampleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExampleModel $exampleModel)
    {
        //
    }
}
