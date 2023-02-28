<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = Comment::all(); // Sense filtració
        // $users = Comment::all(); // Filtrant per atributs, dintre el parèntesi es posaria per exemple ['id','name', 'email']
        $users = User::paginate(8);

        // Per a crear una resposta més personalitzada
        $response = [
            'success' => true,
            'message' => "Llistat d'usuaris recuperat correctament.",
            'data' => $users
        ];

        return response()->json($response, 200); // OK
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $user->load("publication"); // Carrega les publicacions de l'usuari. (mètode publication del model user)

        // Comprova que l'usuari s'ha trobat
        if ($user == null) {
            $response = [
                'success' => false,
                'message' => "Usuari no trobat",
                'data' => []
            ];
            return response()->json($response, 404); // NO OK
        }

        $response = [
            'success' => true,
            'message' => "Usuari trobat",
            'data' => $user
        ];
        return response()->json($response, 200); // OK
    }

}