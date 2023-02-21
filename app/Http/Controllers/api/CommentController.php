<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Validator;

class CommentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comments = Comment::all(); // Sense filtració
        // $comments = Comment::all(); // Filtrant per atributs, dintre el parèntesi es posaria ['id','description', 'user_id']
        $comments = Comment::paginate(8);

        // Per a crear una resposta més personalitzada
        $response = [
            'success' => true,
            'message' => "Llistat de comentaris recuperat correctament.",
            'data' => $comments
        ];

        return response()->json($response, 200); // OK
    }



    /**
     * Guarda un nou comentari a la base de dades
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // Validar camps
        $missatge = $request->all();
        $validator = Validator::make($missatge,
            [
                'name' => 'required|min:3|max:10',
            ]
        );
        
        // Si els camps no compleixen les validacions, retorna un JSON d'error 400
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => "Error de validació",
                'data' => $validator->errors()->all(), // Se li posa all() per a que ho retorni en array
            ];
            return response()->json($response, 400);
        }

        // Es crea el comentari i retorna un JSON de codi 200
        $comment = Comment::create($missatge);

        $response = [
            'success' => true,
            'message' => "Comentari creat correctament",
            'data' => $comment,
        ];

        return response()->json($response, 200);

    }



    /**
     * Actualitza un comentari específic de la base de dades.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        // Buscar comentari
        $comment = Comment::find($id);

        // Si el comentari no s'ha trobat, retorna un JSON d'error 404
        if ($comment == null) {
            $response = [
                'success' => false,
                'message' => "Comentari no trobat",
                'data' => []
            ];
            return response()->json($response, 404); // NO OK
        }

        // Validar camps
        $descripcio = $request->all();
        $validator = Validator::make($descripcio,
            [
                'name' => 'required|min:3',
            ]
        );
        
        // Si els camps no compleixen les validacions, retorna un JSON d'error 400
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => "Error de validació",
                'data' => $validator->errors()->all(), // Se li posa all() per a que ho retorni en array
            ];
            return response()->json($response, 400); // NO OK
        }

        // S'actualitza la descripció del comentari i retorna un JSON de codi 200
        $comment->update($descripcio);
        
        $response = [
            'success' => true,
            'message' => "Comentari actualitzat correctament",
            'data' => $comment,
        ];

        return response()->json($response, 200);

    }



    /**
     * Elimina un comentari específic de la base de dades.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $comment = Comment::find($id);

        if ($comment == null) {
            $response = [
                'success' => false,
                'message' => "Comentari no trobat",
                'data' => []
            ];
            return response()->json($response, 404); // NO OK
        }

        try {
            $comment->delete();
            $response = [
                'success' => true,
                'message' => "Comentari esborrat",
                'data' => $comment
            ];
            return response()->json($response, 200); // OK
        } catch(\Exception $e) {
            $response = [
                'success' => false,
                'message' => "Error esborrant el comentari",
            ];
            return response()->json($response, 400); // OK
        }

    }

}