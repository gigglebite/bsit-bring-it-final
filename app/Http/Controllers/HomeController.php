<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;
use Session;
use App\Models\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        return view ('welcome', ['categories' => $categories]);
    }

    public function checkout(){
        return view('check-out');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function login(){
        return view('/auth/login');
    }


}
