<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByDesc('id')->get();
        return view ('users.index',['users' => $users]);
    }
    public function show(User $user)
    {
        return view('users.show', ['User' => $user]);
    }
    public function create()
    {
        return view ('users.create');     
    }
    public function store(UserRequest $request)
    {
        $request->validated();

        User::create([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário cadastrado com sucesso!'); 
    }
}
