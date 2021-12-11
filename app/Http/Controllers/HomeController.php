<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items=Item::get();
        $category=Category::all();
        $brands =Brand::all();
        return view('frondend.index',compact('items','category','brands'));
    }
}
