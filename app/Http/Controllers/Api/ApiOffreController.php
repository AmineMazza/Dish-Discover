<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offre;
use Exception;
use Illuminate\Http\Request;

class ApiOffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offre = Offre::all();

        return response()->json([
            "offre"=>$offre,
            "status"=>"200, Kulchi Nadi",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            Offre::create($request->all());
    
            return response()->json([
                'status' => 'success',
                'message' => 'Bien ajouté',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur echec d enregistrement',
                'error' => $e->getMessage(),
            ], 500);
        }
    
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
    public function show(string $id)
    {
        try {
            $offre = Offre::findOrFail($id);
    
            return response()->json([
                'status' => 'success',
                'data' => $offre,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Offre introuvable.',
                'error' => $e->getMessage(),
            ], 404); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $offre = Offre::findOrFail($id);
            $offre->update($request->all());
    
            return response()->json([
                'status' => 'success',
                'message' => 'les données ont bien été mises à jour!',
                'data' => $offre,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur lors de mise à jour.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $offre = Offre::findOrFail($id);
            $offre->delete();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Bien supprimé!',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur lors de la suppression.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
