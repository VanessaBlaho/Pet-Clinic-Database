<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerCRUDController extends Controller
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
        $owner = new Owner();
        return view('CRUD_forms.ownerCRUDform', compact('owner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $owner = new Owner();
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');

        $owner->save();

        session()->flash('success_message', 'Yaaay you did it!!! Successfully created!');

        return redirect()->route('owners.edit', $owner->id);
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
        $owner = Owner::findOrFail($id);
        return view('CRUD_forms.ownerCRUDform', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation
        $this->validate($request, [
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $owner = Owner::findOrFail($id);
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');

        $owner->update();

        session()->flash('success_message', 'Yaaay you did it!!! Successfully updated!');

        return redirect()->route('owners.edit', $owner->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
