<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class AuthLoginController extends Controller
{
    use AuthenticatesUsers;

    // ...

    protected function authenticated(Request $request, $user)
    {
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


        // Handle other roles or scenarios here
    }
}



