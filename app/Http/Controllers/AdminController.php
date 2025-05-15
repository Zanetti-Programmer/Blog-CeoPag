<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    // Mostrar o formulário de registro de admin
    public function showRegisterForm()
    {
        // Impedir acesso se já existe um admin
        if (User::where('admin', true)->exists()) {
            return redirect()->route('login')->withErrors([
                'email' => 'Já existe um administrador registrado.',
            ]);
        }

        return view('admin.register'); 
    }

    public function registerAdmin(Request $request)
    {

        if (User::where('admin', true)->exists()) {
            abort(403, 'Já existe um administrador.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'admin' => true,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('admin.developers.index');
    }
}
