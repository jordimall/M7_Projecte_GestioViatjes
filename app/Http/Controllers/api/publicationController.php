<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;
use Validator;

class PublicationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $publications = Comment::all(); // Sense filtració
        // $publications = Comment::all(); // Filtrant per atributs, dintre el parèntesi es posaria per exemple ['id','url', 'description']
        $publications = Publication::all();

        // Per a crear una resposta més personalitzada
        $response = [
            'success' => true,
            'message' => "Llistat de publicacions recuperat correctament.",
            'data' => $publications
        ];

        return response()->json($response, 200); // OK
    }

}