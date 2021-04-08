<?php

namespace App\Http\Controllers;

use App\Models\User;
use JWTAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller 
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = (object) ["status" => false ];
        try {
            $request->merge([
                "password" => Hash::make($request->password),
            ]);
                
            $user = User::create($request->all());

            // $token = JWTAuth::fromUser($user);
            // return response()->json(compact('user', 'token'), 201);

            $response->message = "Registrado correctamente";
            $response->status = true;
            $response->data = $user;

            return response()->json($response, 201);
        } catch (\Throwable $th) {
            
            $response->message = "Este email ya se encuentra registrado";

            return response()->json($response, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = (object) ["status" => false ];

        $user = User::find($id);
        if($user){
            $response->message = "Usuario";
            $response->data = $user;
            $response->status = true;
            return response()->json($response, 200);
        }else{
            $response->message = "Usuario no encontrado";
            return response()->json($response, 404);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response = (object) ["status" => false ];

        try {
            
            User::find($id)->update($request->all());
            
            $response->message = "Usuario actualizado correctamente";
            $response->status = true;
            
            return response()->json($response, 200);
            
        } catch (\Throwable $th) {
            
            $response->message = "Usuario no encontrado";
            return reponse()->json($response, 404);
        }

    }
}
