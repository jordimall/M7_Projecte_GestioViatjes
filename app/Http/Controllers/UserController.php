<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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

    public function edit(User $user)
    {
        if(auth()->user()->id == $user->id){
            return view('users.update', compact('user'));
        }
        return view('welcome');
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required | string | max:30',
                'surname' => 'required | string | max:50',
                'username' => 'required | string | min:3 | max:20'
            ]
        );

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->username = Str::lower($request->username);
        $user->save();
        return view('users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        if(auth()->user()->role == 'admin' || auth()->user()->id == $user->id){
            $user->delete();
        };

        return redirect('/users');
    }

}
