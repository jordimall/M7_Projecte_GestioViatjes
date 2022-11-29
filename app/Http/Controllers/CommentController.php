<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Publication;
use App\Models\User;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('comments.new', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate(
            [
                'description' => 'required',
            ]

        );
        $comment = new Comment;
        $comment->description =  $request->description;
        $comment->publication_id = $id;
        $comment->like = 0;
        $comment->user_id =  auth()->user()->id;
        $comment->save();

        return redirect('/publications/show/' . $id);
    }
}
