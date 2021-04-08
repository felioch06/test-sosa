<?php

namespace App\Http\Controllers;

use App\Models\User;
use JWTAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Login user
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        $response = (object) ["status" => false ];

        if(!$request->email || !$request->password){
            $response->message = "Todos los campos son requeridos";
            return response()->json($response, 500);
        };

        $user = User::where("email", $request->email)->first();

        if(!$user){
            $response->message = "El usuario no existe";
            return response()->json($response, 404);
        }
        
        if(Hash::check($request->password, $user->password)){

            $token = JWTAuth::attempt($credentials);

            $response->message = "Inicio de sesión exitoso";
            $response->data = (object) ["id" => $user->id,"name" => $user->name, "lastname"=>$user->lastname,"email"=>$user->email,"phone"=>$user->phone];
            $response->status = true;
            $response->token = $token;

            return response()->json($response, 200);
        }else{
            $response->message = "El email o la contraseña son incorrectos";
            return response()->json($response, 500);
        };

    }
}
