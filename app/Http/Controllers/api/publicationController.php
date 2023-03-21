<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Validator;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input['title'] = $request->input('title');
        $input['subtitle'] = $request->input('subtitle');
        $input['description'] = $request->input('description');
        $input['categories'] = $request->input('categories');
        $input['user_id'] = $request->input('user_id');
        $input['img'] = $request->file('img');

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
                'data' => $request
                // 'data' => $validadtor->errors()->all()
            ];
            return response()->json($response, 400);
        }

        $file = $input['img'];
        //obtenemos el nombre del archivo
        $nombre =  time() . "_" . $file->getClientOriginalName();
        $input['url'] = 'url_image/' . $nombre;
        //indicamos que queremos guardar un nuevo archivo en el disco local
        Storage::disk('url')->put($nombre,  File::get($file));

        $publication = Publication::create([
            'description' => $input['description'],
            'user_id' => $input['user_id'],
            'url' => $input['url']
        ]);
        $publication['title'] = $input['title'];
        $publication['subtitle'] = $input['subtitle'];

        $publication->save();

        $publication->categories()->attach(explode(',', $input['categories']));


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
        $publication->load('categories', 'user', 'comments');
        $publication->comments->load('user');

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
        $input['title'] = $request->input('title');
        $input['subtitle'] = $request->input('subtitle');
        $input['description'] = $request->input('description');
        $input['categories'] = $request->input('categories');

        if ($request->hasFile('img')) {
            $input['img'] = $request->file('img');
        }

        $validator = Validator::make(
            $input,
            [
                'title' => 'required | min:3',
                'subtitle' => 'required | min:3',
                'description' => 'required | min:3',
                'categories' => 'required',
                'img' => 'mimes: jpeg,png,jpg,webp'
            ]
        );

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => "Error de validació",
                'data' => $request,

            ];
            return response()->json($response, 400);
        }


        if (!isset($input['img'])) {
            $input['url'] = $publication->url;
        } else {
            // obtenemos el nombre del archivo
            $nombre =  time() . "_" . $input['img']->getClientOriginalName();
            $input['url'] = 'url_image/' . $nombre;
            // indicamos que queremos guardar un nuevo archivo en el disco local
            Storage::disk('url')->put($nombre,  File::get($input['img']));
        }

        $publication->title = $input['title'];
        $publication->subtitle = $input['subtitle'];
        $publication->description = $input['description'];
        $publication->url = $input['url'];
        $publication->categories()->detach($publication->categories);
        $publication->categories()->attach(explode(',', $input['categories']));
        $publication->save();

        $response = [
            'success' => true,
            'message' => "Publicació actualitzada correctament",
            'data' => $publication,
            'publication' => $publication,
            'input' => $input,
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
                'data' => $e
            ];

            return response()->json($response, 400);
        }
    }
}
