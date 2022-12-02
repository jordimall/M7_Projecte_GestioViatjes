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
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        // $user->load('comments');
        return view('users.show', compact('user'));
    }

    public function updatePassword(Request $request, $id) // 'request' té les dades del formulari
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:8'
        ]);

        // dd($user->password);
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return view('users.show', compact('user'));
    }

    public function showPasswordConfirmation($id)
    {
        return view('users.passwordConfirmation', compact('id'));
    }

}
