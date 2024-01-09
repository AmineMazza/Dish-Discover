<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Exception;
use Illuminate\Http\Request;


class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres = Offre::all();

        
        return view('offres.index', compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offres.create');

    }

    public function store(Request $request)
    {
        try {
            $filename = '';
    
            if ($request->hasFile('image')) {
                $filename = asset('/assets/img/offres/' . time() . '.' . $request->image->extension());
                $request->image->move(public_path('assets/img/offres/'), $filename);
            }
        
            // Utilisez la méthode create avec les attributs pour créer une nouvelle instance et l'insérer dans la base de données
            $offre = Offre::create([
                'title' => $request->input('title'), // Utilisez input pour récupérer la valeur du champ titre
                'description' => $request->input('description'), // Utilisez input pour récupérer la valeur du champ titre
                'prix' => $request->input('prix'), // Utilisez input pour récupérer la valeur du champ titre
                'image' => $filename,
            ]);
    
            // Offre ajouté avec succès, définissez un message flash
            session()->flash('success', 'Offre ajouté avec succès');
    
            // Redirigez l'utilisateur vers une autre page, par exemple la liste des Offres
            return redirect()->route('offres.index')->with('success', 'Offre créé avec succès');

        } catch (Exception $e) {
            // En cas d'erreur, définissez un message flash d'erreur
            session()->flash('error', 'Une erreur s\'est Offre lors de l\'ajout du Offre.');
    
            // Redirigez l'utilisateur vers une autre page, par exemple la page d'ajout de Offre
            return redirect()->route('offre.create');
        }
        // Redirection vers la vue des catégories
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
        $offre = Offre::find($id);

        return view('offres.edit', compact('offre'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'image' =>'image',
            'description' => 'required',
            'prix' => 'required|numeric',

        ]);
        $offre = Offre::find($id);
        $offre->update($request->all());

        return redirect()->route('offres.index')->with('success', 'Offre modifié avec succès');
    }



    public function destroy($id)
    {
        $offre = Offre::find($id);
        $offre->delete();

        return redirect()->route('offres.index')->with('error', 'Offre supprimé avec succès');
    }
}
