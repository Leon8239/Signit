<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Visitor;

class WelcomeController extends Controller
{
    public function index()
    {
        $visitors = Visitor::all();

        return view('Visitor',[
            'title'=>'Our Visitors',
            'visitors'=>$visitors
        ]);
    }
}
