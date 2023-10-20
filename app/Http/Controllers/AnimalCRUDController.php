<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalCRUDController extends Controller
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
        $animal = new Animal();
        return view('CRUD_forms.animalCRUDform', compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'owner_id' => 'required',
            'name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required'
        ]);

        $animal = new Animal();
        $animal->owner_id = $request->input('owner_id');
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
     

        $animal->save();

        session()->flash('success_message', 'Yaaay you did it!!! Successfully created!');
        session()->flash('error_message', 'Failed. Try again :( ');

        return redirect()->route('animals.edit', $animal->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $animal = Animal::findOrFail($id);
        return view('CRUD_forms.animalCRUDform', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'owner_id' => 'required',
            'name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required'
        ]);

        $animal = Animal::findOrFail($id);
        $animal->owner_id = $request->input('owner_id');
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
     

        $animal->update();

        session()->flash('success_message', 'Yaaay you did it!!! Successfully updated!');

        return redirect()->route('animals.edit', $animal->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
