<?php

namespace App\Http\Controllers;

use App\Models\Difficult;
use App\Models\Hero;
use App\Models\Role;
use App\Models\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        
        return view('heroes/index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $specialties = Special::all();
        $difficulties = Difficult::all();

        return view('heroes.create', compact('roles','specialties','difficulties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'poster' => 'required',
            'weapon' => 'required',
            'role_id' => 'required',
            'special_id' => 'required',
            'difficult_id' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('poster')) {
            // set image name
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            // store to storage
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validateData['poster'] = $imageName ;
        }

        Hero::create($validateData);

        return redirect('/heroes')->with('success', 'Data successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        $roles = Role::all();
        $specialties = Special::all();
        $difficulties = Difficult::all();

        return view('heroes.edit', compact('hero','roles','specialties','difficulties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'poster' => 'required',
            'weapon' => 'required',
            'role_id' => 'required',
            'special_id' => 'required',
            'difficult_id' => 'required',
            'description' => 'required',
        ]);


        if ($request->hasFile('poster')) {
            // delete old image
            Storage::disk('public')->delete('assets/img/' . $hero->poster);

            // set image name
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            // store to storage
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validateData['poster'] = $imageName ;

        }

        $hero->update($validateData);

        return redirect('/heroes')->with('success', 'Data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();
        return redirect('/heroes')->with('success', 'Data deleted successfully!');
    }
}
