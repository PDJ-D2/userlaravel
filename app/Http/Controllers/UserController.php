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
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        $request->validated();
        $user->update([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.show', ['user' => $user->id])->with('success', 'Usuário editado com sucesso!'); 

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

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!'); 

    }
}
