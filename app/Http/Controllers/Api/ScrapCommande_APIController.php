<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatescrapCommande;
use App\Models\Scrap_Commande;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScrapCommande_APIController extends Controller
{


/**
* Voir tout
*/
    public function index()
    {
        $scrapCommande = Scrap_Commande::all();

        return response()->json([
            "scrapCommande"=>$scrapCommande,
            "status"=>"200, Kulchi Nadi",
        ]);
    }

/**
* create
*/
    public function create(Request $request){
        try {

            $dataArray = $request->data; 

            foreach ($dataArray as $data) {
                Scrap_Commande::create($data);
            }
    
            return response()->json([
                "status"=>"200, Les Commande Scrappé Ajouté avec succés",
            ]);       
        } 
        catch (Exception $e) {
            return response()->json($e) ;
        }
      
    }


/**
* update
*/
    public function update(string $id)
    {
        //
    }


/**
* delete
*/
public function delete($id)
{
    try {
        $scrapCommande = Scrap_Commande::find($id);
        $scrapCommande->delete();

        return response()->json([
            "status"=>"200, Scrap Commande Supprimé avec succés",
            "data"=>$scrapCommande,
        ]);       
    } 
    catch (Exception $e) {
        return response()->json($e) ;
    }
}
}
