<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $category = Category::All();
        return view('home', ['category' => $category]);
    }

    public function category($id){
        $category = Category::All();
        $categoryList = Category::Find($id);
        return view('category/category', ['category' => $category, 'categoryList' => $categoryList]);
    }

}
