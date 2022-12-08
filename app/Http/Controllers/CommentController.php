<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

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
        $comment->user_id =  auth()->user()->id;
        $comment->save();

        return redirect('/publications/show/' . $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //$planet = Planet::findOrFail($id);

        return view('comments.update', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate(

            [
                'description' => 'required | min:3'
            ]

        );
        //$planet = Planet::findOrFail($id);
        $comment->description =  $request->description;
        $comment->publication_id = $comment->publication_id;
        $comment->user_id =  $comment->user_id;
        $comment->save();

        return redirect('/publications/show/' . $comment->publication_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {

        if(auth()->user()->role == 'admin' || $comment->user_id){
            $comment->delete();
        };

        if(auth()->user()->role == 'admin'){
            return redirect('/comments');
        };

        return redirect('/publications/show/' . $comment->publication_id);
    }
}
