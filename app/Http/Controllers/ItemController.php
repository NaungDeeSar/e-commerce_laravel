<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Brand;
use App\Subcategory;
use App\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand=Brand::all();
        $subcategory=Subcategory::all();
        return view('backend.items.create',compact('brand','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'photo'=>'required|mimes:jpeg,png,jpg',
            'price'=>'required',
            'brand_id'=>'required',
            'subcategory_id'=>'required',
            'description'=>'required'

        ]);
        //       $photos=$request->file('photo');
        // $photo_array=array();
        // foreach ($photos as $photo){
        //     $filename=time()."_".$photo->getClientOriginalExtension();
        //     array_push($photo_array,$filename);
        //     $photo->move(public_path()."/backend_asset/items/",$filename);
        // }
          // If include file, upload
        if($request->file()) {          
            $fileName = time().'_'.$request->photo->getClientOriginalName();          
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');
            $path = '/storage/'.$filePath;
        }

        // store
       
        $codeno = "CODE_".mt_rand(10000, 99999); // better than rand()
        $item=new Item;
        $item->codeno=$codeno;
        $item->name=$request->name;
        $item->photo=$path;
        $item->price=$request->price;
        $item->discount=$request->discount;
        $item->brand_id=$request->brand_id;
        $item->subcategory_id=$request->subcategory_id;
        $item->description=$request->description;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $brand=Brand::all();
        $category=Category::all();
        $subcategory=Subcategory::all();
        return view('backend.items.show',compact('item','brand','category','subcategory'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $brand=Brand::all();
        $category=Category::all();
        $subcategory=Subcategory::all();
        return view('backend.items.edit',compact('item','brand','category','subcategory'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
            $request->validate([
                'name'=>'required',
                'photo'=> 'required',
                'price'=>'required',
                'brand_id'=>'required',
                'subcategory_id'=>'required',
                'description'=>'required'

            ]);


              // If include file, upload
        if($request->file()) {          
            $fileName = time().'_'.$request->photo->getClientOriginalName();          
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');
            $path = '/storage/'.$filePath;
        }

        $item->name=$request->name;
        $item->photo=$path;
        $item->price=$request->price;
        $item->discount=$request->discount;
        $item->brand_id=$request->brand_id;
        $item->subcategory_id=$request->subcategory_id;
        $item->description=$request->description;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
