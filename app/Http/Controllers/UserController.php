<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function create(){
        return view('users/create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=> 'required'
        ]);
        $user = new User;
//        echo '<pre>';
//        print_r($request->input(''));exit();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);

        $user->save();
        return redirect()->route('login')
            ->with('success','Account Successfully Created.');
    }
}
