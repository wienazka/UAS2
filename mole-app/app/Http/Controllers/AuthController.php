<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        $users = User::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        
        return view('users/index',compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('users.create', compact('users'));
    }
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'role' => 'required',
        ]);

        User::create($validateData);

        return redirect('/users')-> with('success','Data successfully added!');
    }
    public function update(Request $request,User $user)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'role' => 'required',
        ]);

        $user->update($validateData);

        return redirect('/users')-> with('success','Data successfully updated!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('success','Data delete successfully!');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'role' => 'required',
        ]);

        $validateData['password'] = hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('success','Register successfully!');

    }
    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validateData)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/dasboard')->with('success', 'Login Successfully as admin');
            } else {
                return redirect('/page')->with('success', 'Login Successfully');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ]);

    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success','You have successfully logged out');
    }
}
