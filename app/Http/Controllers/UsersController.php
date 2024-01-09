<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
        $users = User::paginate(10);

        
        return view('users.index', compact('users'));
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'address' =>'required',
            'tel' => 'required',
            'city' => 'required',
            'role' => 'required',
            'statut' => 'required',
            'email' => 'required',

        ]);
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'Utilisateur modifié avec succès');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')->with('error', 'Utilisateur supprimé avec succès');
    }
}
