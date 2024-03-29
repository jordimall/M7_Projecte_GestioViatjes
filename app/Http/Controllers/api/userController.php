<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
    public function show($id) {

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // Buscar planeta
       
        $user = User::find($id);

        if ($user == null) {
            $response = [
                'success' => false,
                'message' => "Usuari no trobat",
            ];
            return response()->json($response, 404); // NO OK
        }

        // Validar camps
        $input = $request->all();
        $validator = Validator::make($input,
            [
                'name' => ['required', 'string', 'max:30'],
                'surname' => ['required', 'string', 'max:50'],
                'username' => ['required', 'string', 'min:3', 'max:20']
            ]
        );
        
        if ($validator->fails()) {
            
            $response = [
                'success' => false,
                'message' => "Error de validació.",
                'errors' => $validator->errors(),
                'input' => $input
            ];
            return response()->json($response, 404);

        }

        $user->name = $input['name'];
        $user->surname = $input['surname'];
        $user->username = $input['username'];
        $user->save();
        
        $response = [
            'success' => true,
            'message' => "Usuari actualitzat correctament",
            'data' => $user,
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user == null) {
            $response = [
                'success' => false,
                'message' => "Usuari no trobat",
            ];
            return response()->json($response, 404); // NO OK
        }

        try {

            $user->delete();
            $response = [
                'success' => true,
                'message' => "Planeta esborrat",
                'data' => $user
            ];
            return response()->json($response, 200); // OK

        } catch(\Exception $e) {

            $response = [
                'success' => false,
                'message' => "Error esborrant usuari",
            ];
            return response()->json($response, 400); // OK

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request, $id) {   
        
        // Buscar usuari
        $user = User::find($id);

        if ($user == null) {
            $response = [
                'success' => false,
                'message' => "Usuari no trobat",
                'data' => []
            ];
            return response()->json($response, 404); // NO OK
        }

        // Validar camps
        $input = $request->all();
        $validator = Validator::make($input,
            [
                'password' => 'required|min:3|max:10',
            ]
        );
        
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => "Error de validació",
                'data' => $validator->errors()->all(),
            ];
            return response()->json($response, 400);
        }

        // Versió 2 no perillosa :)
        $user->password = Hash::make($input['password']);;
        $user->save();
        
        $response = [
            'success' => true,
            'message' => "Usuari actualitzat correctament",
            'data' => $user
        ];
        return response()->json($response, 200);

    }

}