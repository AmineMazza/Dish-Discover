<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateScrapResto;
use App\Models\Scrap_Resto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScrapResto_APIController extends Controller
{


/**
* Voir tout
*/
    public function index()
    {
        try {
            $scrapResto = Scrap_Resto::all();

            return response()->json([
                "scrapResto"=>$scrapResto,
                "status"=>"200, Kulchi Nadi",
            ]);      
        } 
        catch (Exception $e) {
            return response()->json($e) ;
        }
    }

/**
* create
*/
    public function create(Request $request){
        try {

            $dataArray = $request->data; 

            foreach ($dataArray as $data) {
                Scrap_Resto::create($data);
            }
    
            return response()->json([
                "status"=>"200, Les Restos scrappé Ajouté avec succés",
                "data"=>$dataArray,
            ]);       
        } 
        catch (Exception $e) {
            return response()->json($e) ;
        }
      
    }
/**
* update
*/
    public function update(UpdateScrapResto $request, $id){
        try {
            $scrapResto = Scrap_Resto::find($id);

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
                "status"=>"200, Scrap Resto Modifié avec succés",
                "data"=>$scrapResto,
            ]);       
        } 
        catch (Exception $e) {
            return response()->json($e) ;
        }
      
    }

/**
* delete
*/
    public function delete($id)
    {
        try {
            $scrapResto = Scrap_Resto::find($id);
            $scrapResto->delete();
    
            return response()->json([
                "status"=>"200, Scrap Resto Supprimé avec succés",
                "data"=>$scrapResto,
            ]);       
        } 
        catch (Exception $e) {
            return response()->json($e) ;
        }
    }
}
