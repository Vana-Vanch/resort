<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        auth()->attempt($request->only('email', 'password'));
        return redirect('/');


    }

    public function destroy(User $user){
        $user->delete();
        return back();
    }

}
