<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use App\Models\Publication;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $publications = Publication::inRandomOrder()->limit(8)->get();
        return view('welcome',compact('publications'));
    }
}
