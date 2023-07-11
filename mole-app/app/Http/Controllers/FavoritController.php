<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use App\Models\Hero;
use App\Models\User;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favorits = Favorit::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        
        return view('favorits/index', compact('favorits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $heroes = Hero::all();

        return view('favorits.create', compact('users','heroes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'hero_id' => 'required',
            'date' => 'required',
            'notes' => 'required',
            'rating' => 'required',
        ]);

        Favorit::create($validateData);

        return redirect('/favorits')->with('success','Data successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorit $favorit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorit $favorit)
    {
        $users = User::all();
        $heroes = Hero::all();

        return view('favorits.edit', compact('favorit','users','heroes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorit $favorit)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'hero_id' => 'required',
            'date' => 'required',
            'notes' => 'required',
            'rating' => 'required',
        ]);

        $favorit->update($validateData);

        return redirect('/favorits')->with('success','Data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorit $favorit)
    {
        $favorit->delete();

        return redirect('/favorits')->with('success','Data deleted successfully!');

    }
}
