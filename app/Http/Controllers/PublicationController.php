<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publicatons = Publication::all();
        return view('publicatons.index', compact('publicatons'));
    }
}
