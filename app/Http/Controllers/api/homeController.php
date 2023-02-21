<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;

class homeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $publications = Publication::inRandomOrder()->limit(8)->get();
        $response = [
            'success' => true,
            'message' => 'Llistat de publicacions recuperat',
            'data' => $publications
        ];
        // return $response;

        return response()->json($response, 200); //200 cap a dalt a funcionat, 400 cap a dalt error, 500 cap a dalt error del servidor
    }
}
