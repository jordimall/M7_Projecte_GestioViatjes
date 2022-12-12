<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Category;

class PublicationController extends Controller
{

    public function index()
    {
        $publications = Publication::paginate(12);
        return view('publications.index', compact('publications'));
    }

    public function create()
    {
        $categories  = Category::all();
        return view('publications.new', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(

            [
                'title' => 'required | min:3',
                'subtitle' => 'required | min:3',
                'description' => 'required | min:3',
                'categories' => 'required',
                'img' => 'required | mimes: jpeg,png,jpg,webp'
            ]

        );

        $file = $request->file('img');
        //obtenemos el nombre del archivo
        $nombre =  time() . "_" . $file->getClientOriginalName();
        $url = 'url_image/' . $nombre;
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('url')->put($nombre,  \File::get($file));

        $publication = new Publication;
        $publication->title =  $request->title;
        $publication->subtitle =  $request->subtitle;
        $publication->description =  $request->description;
        $publication->url = $url;
        $publication->user_id = auth()->user()->id;
        $publication->save();
        $publication->categories()->attach($request->categories);

        //return redirect('/publications');
        return view('publications.show', compact('publication'));
    }

    public function show(Publication $publication)
    {
        return view('publications.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        if(auth()->user()->id == $publication->user_id){
            $categories  = Category::all();
            return view('publications.update', compact('publication'), compact('categories'));
        }
        return redirect(route('publications.show', compact('publication')));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        $request->validate(

            [
                'title' => 'required | min:3',
                'subtitle' => 'required | min:3',
                'description' => 'required | min:3',
                'categories' => 'required',
                'img' => 'mimes: jpeg,png,jpg,webp'
            ]

        );

        $file = $request->file('img');
        if (empty($file)) {
            $url = $publication->url;
        } else {
            //obtenemos el nombre del archivo
            $nombre =  time() . "_" . $file->getClientOriginalName();
            $url = 'url_image/' . $nombre;
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('url')->put($nombre,  \File::get($file));
        }

        $publication->title =  $request->title;
        $publication->subtitle =  $request->subtitle;
        $publication->description =  $request->description;
        $publication->url =  $url;
        $publication->user_id = $publication->user_id;
        $publication->save();

        $publication->categories()->detach($publication->categories);
        $publication->categories()->attach($request->categories);


        return redirect(route('publications.show', compact('publication')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        if(auth()->user()->id == $publication->user_id || auth()->user()->role == 'admin'){
            $publication->delete();
        }

        return redirect('/publications');
    }
}
