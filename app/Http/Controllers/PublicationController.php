<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use app\Models\Comment;

class PublicationController extends Controller
{
    public function index()
    {
        $publicatons = Publication::all();
        return view('publicatons.index', compact('publicatons'));
    }

    public function show(Publication $publication)
    {
        $publication->load("categories");

        return view('publicatons.show', compact('publication'));
    }
}
