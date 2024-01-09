<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUser;
use App\Http\Requests\UpdateUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users_APIController extends Controller
{
  
    public function index()
    {
        $users = User::all();
        
        return response()->json([
            "users"=>$users,
            "Statut Code" => "200",
            "message"=>"Kulchi Nadi",
        ]);
    }


    public function register(RegisterUser $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->tel = $request->tel;
        $user->city = $request->city;
        // $user->statut = $request->statut;
        // $user->role=$request->role; 

        $user->save();    
        return response()->json([
            "Statut Code" => "200",
            "message" => "User registered successfully",
            "user"=>$user,
        ]);

    }

    public function login(LoginUserRequest $request)
    {
        if (auth()->attempt($request->only(['email' , 'password']))) {
         
            //Pour récupérer l'utilisateur connecté :
            $user = auth()->user();

            //Pour Creer un Token JWT:
            $token = $user->createToken('CLE_SECRET_JUST_POUR_BACK-END')->plainTextToken; //"createToken" elle est Pas reconu par laravel mais il marche bien
            return response()->json([
                'Statut Code' => '200',
                'message' => 'Utilisateur Connecté',
                "user"=>$user,
                "token"=>$token,
            ]);

        }else{
            return response()->json([
                'Statut Code' => '403',
                'message' => 'Information Non valide',
            ]);
        }
    }

    public function update(UpdateUser $request, $id){
        try {
            $user = User::find($id);

            $user->role = $request->role;
            $user->statut = $request->statut;

            $user->save();
    
            return response()->json([
                "status"=>"200, User Modifié avec succés",
                "data"=>$user,
            ]);       
        } 
        catch (Exception $e) {
            return response()->json($e) ;
        }
      
    }

    public function delete($id)
{
    try {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            "status"=>"200, Utilisateur Supprimé avec succés",
            "data"=>$user,
        ]);       
    } 
    catch (Exception $e) {
        return response()->json($e) ;
    }
}

}