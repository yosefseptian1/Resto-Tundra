<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $gorengan = Category::where('name', 'gorengan')->first();
        return view('welcome', compact('gorengan'));
    }
    public function thankyou(){
        return view('thankyou');
    }
}
