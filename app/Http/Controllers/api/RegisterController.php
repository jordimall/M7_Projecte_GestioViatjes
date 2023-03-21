<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        dd('hola');
        // En $input guardem totes les dades que s'han enviat via POST
        $input = $request->all();
        
        // validem les dades rebudes
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:30'],
            'surname' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'min:3', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:60', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        // Si alguna dada no és correcta
        if ($validator->fails()) {

            $response = [
                'success' => false,
                'message' => "Dades usuari incorrectes.",
                'errors' => $validator->errors(),
                'input' => $input
            ];
            return response()->json($response, 404);

        }

        // creem el nou usuari
        $user = User::create([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'username' => Str::lower($input['username']),
            'email' => $input['email'],
            'password' => Hash::make($input['password']), // Encriptem el password
            'role' => 'normal'
        ]);

        // Creem un token per al nou usuari
        $data['token'] =  $user->createToken('token')->plainTextToken;
        $data['name'] =  $user->name;
        $data['id'] =  $user->id;
        $data['role'] =  $user->role;

        // Responem a la crida amb un tot ok!
        $response = [
            'success' => true,
            'data'    => $data,
            'message' => "Usuari creat correctament.",
        ];

        return response()->json($response, 200);
    }



    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();

            $data['token'] =  $user->createToken('token')->plainTextToken;
            $data['name'] =  $user->name;
            $data['id'] =  $user->id;
            $data['role'] =  $user->role;

            $response = [
                'success' => true,
                'data'    => $data,
                'message' => "Usuari autoritzat correctament.",
            ];

            return response()->json($response, 200);
        }

        $response = [
            'success' => false,
            'message' => "Usuari no autoritzat.",
        ];

        return response()->json($response, 401);
    }

    public function logout($id)
    {
        $user = User::find($id);
        $user->tokens()->delete(); //esborra tots els tokens del usuari de la base de dades.

        return response()->json('Logout correcte',200);
    }
}
