<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specials = Special::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('specialties/index', compact('specials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specials = Special::all();

        return view('specialties.create', compact('specials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Special::create($validateData);

        return redirect('/specialties')->with('success', 'Data successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Special $specialty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Special $specialty)
    {
        return view('specialties/edit', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Special $specialty)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $specialty->update($validateData);

        return redirect('/specialties')->with('success', 'Data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Special $specialty)
    {
        $specialty->delete();
        return redirect('/specialties')->with('success', 'Data deleted succesfully!');
    }
}
