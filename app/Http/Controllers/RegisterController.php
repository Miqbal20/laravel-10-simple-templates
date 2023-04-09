<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Auth/Register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {        
        
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = User::create($request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required|min:8|confirmed'
        ]));

        $user->password = Hash::make($user->password);
        $user->save();

        Auth::login($user);

        return to_route('login')->with('success', 'Registrasi Sukses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
