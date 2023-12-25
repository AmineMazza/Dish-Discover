<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Scrap_Resto;
use Exception;
use Illuminate\Http\Request;

class ScrapResto_APIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scrapResto = Scrap_Resto::all();
        
        return response()->json([
            "scrapResto"=>$scrapResto,
            "status"=>"200, Kulchi Nadi",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){
        try {
            $scrapResto = new Scrap_Resto();

            $scrapResto->placeId = $request->placeId;
            $scrapResto->address = $request->address;
            $scrapResto->category = $request->category;
            $scrapResto->googleUrl = $request->googleUrl;
            $scrapResto->storeName = $request->storeName;
            $scrapResto->ratingText = $request->ratingText;
            $scrapResto->stars = $request->stars;
            $scrapResto->numberOfReviews = $request->numberOfReviews;
            $scrapResto->latitude = $request->latitude;
            $scrapResto->longitude = $request->longitude;

            $scrapResto->save();
    
            return response()->json([
                "status"=>"200, Produit Ajouté avec succés",
                "data"=>$scrapResto,
            ]);       
        } 
        catch (Exception $e) {
            return response()->json($e) ;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
