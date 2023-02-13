<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;


class apicategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(['id','name','created_at','updated_at']);
        $response = [
            'success' => true,
            'message' => 'Llistat de categories recuperat',
            'data' => $categories
        ];
        // return $response;

        return response()->json($response, 200); //200 cap a dalt a funcionat, 400 cap a dalt error, 500 cap a dalt error del servidor
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validadtor = Validator::make(
            $input,
            [
                'name' => 'required|min:3'
            ]
        );

        if($validadtor->fails()){
            $response = [
                'success' => false,
                'message' => 'Errors de validació',
                'data' => $validadtor->errors()->all()
            ];
            return response()->json($response,400);
        }

        $categoria = Category::create($input);

        $response = [
            'success' => true,
            'message' => 'Categoria creada',
            'data' => $categoria
        ];

        return response()->json($response,200);

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Category::find($id);
        if ($categoria == null) {
            $response = [
                'success' => false,
                'message' => 'Categoria no trobada',
                'data' => [],
            ];

            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'message' => 'Categoria trobada',
            'data' => $categoria,
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

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
            $categoria = Category::find($id);

            if ($categoria == null) {
                $response = [
                    'success' => false,
                    'message' => 'Categoria no trobada',
                    'data' => [],
                ];

                return response()->json($response, 404);
            }

            // Validar camps
            $input = $request->all();
            $validator = Validator::make($input,
                [
                    'name' => 'required|min:3',
                ]
            );

            if ($validator->fails()) {
                $response = [
                    'success' => false,
                    'message' => "Error de validació",
                    'data' => $validator->errors(),
                ];
                return response()->json($response, 400);
            }

            // Versió 1 però perillosa :/
            $categoria->update($input);

            // Versió 2 no perillosa 🙂
            // $categoria->name = $input->name;
            // $categoria->save();

            $response = [
                'success' => true,
                'message' => "CAtegoria actualitzada correctament",
                'data' => $categoria,
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
        $categoria = Category::find($id);
        if ($categoria == null) {
            $response = [
                'success' => false,
                'message' => 'Categoria no trobada',
                'data' => [],
            ];

            return response()->json($response, 404);
        }

        try {
            $categoria->delete();

            $response = [
                'success' => true,
                'message' => 'Categoria esborrada',
                'data' => $categoria,
            ];

            return response()->json($response, 200);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'message' => 'Error esborrant categoria',
            ];

            return response()->json($response, 400);
        }
    }
}
