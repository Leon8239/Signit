<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;

        $user->save();
        return redirect()->route('store')
            ->with('success','Account Successfully Created.');
    }
}
