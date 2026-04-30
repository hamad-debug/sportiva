<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Role-based redirect after login
     */
    protected function redirectTo()
    {
        $user = auth()->user();

        if ($user && $user->role === 'admin') {
            return '/admin/dashboard';
        }

        return '/dashboard';
    }

    /**
     * Only guests can access login page
     * Logged-in users can logout only
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}