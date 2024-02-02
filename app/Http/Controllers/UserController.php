<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('services.index');
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

        return redirect()->route('services.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
    public function sendEmail(Service $service)
    {
        $data = [
            'service' => $service,
        ];

        Mail::to('hbenzzinbi@gmail.com')->send(new MyEmail($data));

    }
}
