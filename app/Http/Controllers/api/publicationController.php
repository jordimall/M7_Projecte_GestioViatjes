<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Publication;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class publicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicatios = Publication::paginate(12);
        $response = [
            'success' => true,
            'message' => 'Llistat de publicacions recuperat',
            'data' => $publicatios
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
        //
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
                'title' => 'required | min:3',
                'subtitle' => 'required | min:3',
                'description' => 'required | min:3',
                'categories' => 'required',
                'img' => 'required | mimes: jpeg,png,jpg,webp'
            ]
        );

        if ($validadtor->fails()) {
            $response = [
                'success' => false,
                'message' => 'Errors de validació',
                'data' => $validadtor->errors()->all()
            ];
            return response()->json($response, 400);
        }

        $file = $input['file'];
        //obtenemos el nombre del archivo
        $nombre =  time() . "_" . $file->getClientOriginalName();
        $input['url'] = 'url_image/' . $nombre;
        //indicamos que queremos guardar un nuevo archivo en el disco local
        Storage::disk('url')->put($nombre,  File::get($file));

        $input['user_id'] = auth()->user()->id;

        $publication = Publication::create($input);

        $publication->save();
        $publication->categories()->attach($input['categories']);

        $response = [
            'success' => true,
            'message' => 'Publicació creada',
            'data' => $publication
        ];

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $publication = Publication::find($id);
        $publication->load('categories');
        $publication->load('user');
        $publication->load('comments');
        $publication->load('comments')->load('user');

        if ($publication == null) {
            $response = [
                'success' => false,
                'message' => 'Publicació no trobada',
                'data' => [],
            ];

            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'message' => 'Publicació trobada',
            'data' => $publication,
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $publication = Publication::find($id);

        if ($publication == null) {
            $response = [
                'success' => false,
                'message' => 'Publicació no trobada',
                'data' => [],
            ];

            return response()->json($response, 404);
        }

        // Validar camps
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'title' => 'required | min:3',
                'subtitle' => 'required | min:3',
                'description' => 'required | min:3',
                'categories' => 'required',
                'img' => 'required | mimes: jpeg,png,jpg,webp'
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

        $file = $input['img'];
        if (empty($file)) {
            $url = $publication->url;
        } else {
            //obtenemos el nombre del archivo
            $nombre =  time() . "_" . $file->getClientOriginalName();
            $input['url'] = 'url_image/' . $nombre;
            //indicamos que queremos guardar un nuevo archivo en el disco local
            Storage::disk('url')->put($nombre,  File::get($file));
        }

        // Versió 1 però perillosa :/
        $publication->update($input);
        $publication->save();
        $publication->categories()->detach($publication->categories);
        $publication->categories()->attach($input['categories']);

        // Versió 2 no perillosa 🙂
        // $categoria->name = $input->name;
        // $categoria->save();

        $response = [
            'success' => true,
            'message' => "Publicació actualitzada correctament",
            'data' => $publication,
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

        $publication = Publication::find($id);
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'admin') {
            if ($publication == null) {
                $response = [
                    'success' => false,
                    'message' => 'publication no trobada',
                    'data' => [],
                ];

                return response()->json($response, 404);
            }

            try {
                $publication->delete();

                $response = [
                    'success' => true,
                    'message' => 'publication esborrada',
                    'data' => $publication,
                ];

                return response()->json($response, 200);
            } catch (\Exception $e) {
                $response = [
                    'success' => false,
                    'message' => 'Error esborrant publication',
                ];

                return response()->json($response, 400);
            }
        }
    }
}
