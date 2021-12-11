<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function __construct($value='')
    {
        $this->middleware('auth:api')->only('store');
    }

    public function index()
    {
          $items =item::all();
           return response()->json([
            'status' => 'ok',
            'totalResults' => count($items),
            'items' => ItemResource::collection($items)
        ]);
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
            "photo" => "sometimes|required|mimes:jpeg,bmp,png",
            'price'=>'required',
            'brand_id'=>'required',
            'subcategory_id'=>'required',
            'description'=>'required'

        ]);
        
        if($request->file()) {          
            $fileName = time().'_'.$request->photo->getClientOriginalName();          
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');
            $path = '/storage/'.$filePath;
        }
        // store
       
        $codeno = "CODE_".mt_rand(10000, 99999); 
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
         // return
        return new ItemResource($item);
                   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return new ItemResource($item);
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
            "photo" => "sometimes|required|mimes:jpeg,bmp,png",
            'price'=>'required',
            'brand_id'=>'required',
            'subcategory_id'=>'required',
            'description'=>'required'

        ]);
        
        if($request->file()) {          
            $fileName = time().'_'.$request->photo->getClientOriginalName();          
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');
            $path = '/storage/'.$filePath;
        }
        // store
       
       
        $item->name=$request->name;
        $item->photo=$path;
        $item->price=$request->price;
        $item->discount=$request->discount;
        $item->brand_id=$request->brand_id;
        $item->subcategory_id=$request->subcategory_id;
        $item->description=$request->description;
        $item->save();
         // return
        return new ItemResource($item);
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
        return new ItemResource($item);
    }
}
