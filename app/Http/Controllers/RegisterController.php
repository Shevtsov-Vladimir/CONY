<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function signUp()
    {
        return view('auth.sign_up');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['regex:/^[А-Яа-я\- ]{1,}$/u', 'required'],
            'surname' => ['regex:/^[А-Яа-я\- ]{1,}$/u', 'required'],
            'patronymic' => ['regex:/^[А-Яа-я\- ]{0,}$/u', 'nullable'],
            'email' => ['email', 'unique:users', 'required'],
            'telephone' => ['regex:/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/m', 'required'],
            'password' => ['confirmed', 'min:6', 'required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/')->with('info', 'Вы успешно зарегистрировались!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('info', 'Выход выполнен!');
    }

    public function loginform()
    {
        return view('auth.sign_in');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->isAdmin) {
                return redirect('/admin')->with('info', 'Вы зашли как администратор');
            } else {
                return redirect('/')->with('info', 'Вход выполнен!');
            }
        }
        return back()->withErrors(['Данные не соответствуют!']);
    }
}
