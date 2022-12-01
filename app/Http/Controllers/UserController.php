<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        $user->load('comments');
        return view('users.show', compact('user'));
    }

    public function updatePassword(Request $request, $id) // 'request' té les dades del formulari
    {
        $request->validate(
            ['password' => ['required', 'string', 'min:8', 'confirmed']]
        );

        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return view('users.show', compact('user'));
    }

}
