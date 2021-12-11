<?php

namespace App\Http\Controllers;
use App\Item;
use App\Category;
use App\Brand;
use App\Subcategory;
use Illuminate\Http\Request;

class FrondendController extends Controller
{
    public function index()
    {
    	$items=Item::all();
    	$brands =Brand::all();
        $category = Category::all();
    	return view('frondend.index',compact('items','category','brands'));
    }
    public function signin()
    {
        return view('frondend.signin');

    }
    public function signup()
    {
        return view('frondend.signup');
    }
    public function itemdetail($id)
    {
    	$item=Item::find($id);
        $items=Item::all();
    	$brand=Brand::get();
    	$subcategory=Subcategory::all();
    	return view('frondend.itemdetail',compact('item','brand','subcategory','items'));
    }
    public function cart()
    {
        return view('frondend.cart');
    }

      public function order_success(){
        return view('frondend.ordersuccess');

    }
   public function filter($subcategory)
  {
    $items = Item::where('subcategory_id',$subcategory)->orderBy('id','desc')->get();
    return view('frondend.filter',compact('items'));
  }


}
