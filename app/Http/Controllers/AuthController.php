<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'min:8'],
        ]);

        if (auth('web')->attempt($data)){
            return redirect(route('home'));
        }

        return redirect(route('auth.login'))->withErrors(['email' => 'Пароль не найден, либо данные введены неправильно']);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if($user){
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }

    public function showForgotForm()
    {
        return view('auth.forgot');
    }

    public function forgot(ForgotFormRequest $request)
    {
        $data = $request->validated();

        $user = User::where(['email' => $data['email']])->first();

        $password_new = uniqid();

        $user->password = bcrypt($password_new);

        $user->save();

        session()->flash('password_new', $password_new);

        return redirect(route('forgot'));
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }
}
