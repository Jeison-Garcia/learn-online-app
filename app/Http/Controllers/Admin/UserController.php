<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => ['required', Password::min(9)],
        ]);

        $user = User::create(['id' => $request->id, 'name' => $request->name, 'email' => $request->email, 'password' => password_hash($request->password, PASSWORD_BCRYPT)]);
        return redirect()->route('admin.users.edit', compact('user'))->with('info', 'Se ha añadido el usuario correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user->update(['name' => $request->name]);
        return redirect()->route('admin.users.edit', compact('user'))->with('info', 'La información del usuario se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info', 'El usuario se ha eliminado correctamente.');
    }
}
