<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class UserLoginController extends Controller
{
    // use AuthenticatesUsers;

    // ...

    public function authenticated(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($user = Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('user')) {
                return redirect()->route('user.dashboard');
            }
            elseif ($user->hasRole('storekeeper')) {
            return redirect()->route('storekeeper.dashboard');
            } elseif ($user->hasRole('estate')) {
            return redirect()->route('estate.dashboard');
            } elseif ($user->hasRole('department')) {
            return redirect()->route('department.dashboard');
            } elseif ($user->hasRole('userdepartment')) {

            return redirect()->route('userdepartment.dashboard');
        }
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');


        // Handle other roles or scenarios here
    }
}


// LoginController.php





