<?php

namespace App\Http\Controllers;

// use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('user.register');
    }

    // Register User
    public function store(Request $request) {
        $formFields = $request->validate([
            'usertype' => ['required'],
            'name' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        $formFields['password'] = bCrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        if(auth()->user()->usertype == 'fundcust') {
            return view('funder-dashboard.index');
        }

        else {
            return view('merchant-dashboard.index');
        }
    }

    // View Login Form
    public function login() {
        return view('user.login');
    }

    // Logout user

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
        
        if(Auth::attempt($formFields)) {
            if(auth()->user()->usertype == 'fundcust') {
                return view('funder-dashboard.index');
            }
    
            else {
                return view('merchant-dashboard.index');
            }
        $request->session()->regenerate();

        return redirect('/users/dashboard');
        }
    }

    // Go to Dashboard
    public function dashboard() {
            if(auth()->user()->usertype == 'fundcust') {
                return view('funder-dashboard.index');
            }
    
            else {
                return view('merchant-dashboard.index');
            }
        return redirect('/users/dashboard');
    }
}