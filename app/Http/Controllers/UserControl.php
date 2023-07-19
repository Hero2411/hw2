<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserControl extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'logname' => 'required',
            'logpassword' => 'required',
        ]);

        if (auth()->attempt(['name' => $data['logname'], 'password' => $data['logpassword']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:6', 'max:60', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\\D)(?=.*(_|[^\\w])).+$/'],
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        auth()->login($user);

        return redirect('/');
    }
}
