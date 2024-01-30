<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function signup(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:25',
            'lname' => 'required|string|max:25',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone_number' => 'required|max:15',
        ]);

        $user = User::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone_number' => $request->input('phone_number'),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
