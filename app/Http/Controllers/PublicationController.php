<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{

    public function index()
    {
        $publicatons = Publication::paginate(10);
        return view('publications.index', compact('publications'));
    }

    public function create()
    {
        return view('publicatons.new');
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
                'description' => 'required | min:3'
            ]

        );
        $publicaton = new Publication;
        $publicaton->name =  $request->name;
        $publicaton->save();

        return redirect('/planet');
    }

    public function show(Publication $publication)
    {
        $publication->load("categories");

        return view('publicatons.show', compact('publication'));
    }
}
