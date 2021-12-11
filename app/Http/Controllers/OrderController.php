<?php
namespace App\Http\Controllers;
use App\order;
use Illuminate\Http\Request;
use Auth;
Use Alert;
class OrderController extends Controller
{
    public function __construct($value='')
    {
        $this->middleware('auth')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        $orders =Order::orderBy('id','desc')->get();
        return view('backend.order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'ls' => 'required',
            'notes' => 'required'

        ]);

        $lsArr = json_decode($request->ls);

        $total = 0;
        foreach ($lsArr as $row) {
            $total += $row->discount*$row->qty;
        }
   
        // store
        $order = new Order;
        $order->voucherno = uniqid();
        $order->orderdate = date('Y-m-d');
        $order->total = $total;
        $order->notes = $request->notes;
        $order->user_id = Auth::id(); // auth user_id
        $order->save();
        foreach ($lsArr as $row) {
            $order->items()->attach($row->id,['qty'=>$row->qty]);
        }
             Alert::success('Complete', 'Your Order Successful!');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
          return view('backend.order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
