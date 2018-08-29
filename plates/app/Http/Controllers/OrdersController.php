<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Order;
use Illuminate\Support\Facades\Validator;
use App\Item;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // get all the nerds
                $orders = Order::all();

                // load the view and pass the nerds
                return view('orders.index')
                    ->with('orders', $orders); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('orders.create')
            ->with('items', $items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   /*
        // Validation 
         $this->validate($request, [ 
            'category' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'title' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'body' => 'required|max:500',
            'price' => 'required',
            ]); 
           */ 

            // store
            $order = new Order;
			$order->orderid = 2;//$request->input('orderid');
            $order->category = $request->input('category');
            $order->title = $request->input('title');
            $order->comments = "test";//$request->input('comments');
            $order->quantity = $request->input('quantity');
            $order->price = 22;//$request->input('price');
            $order->table = $request->input('table');
            $order->seat = $request->input('seat');
            $order->save();

            // redirect
            return redirect('/orders')->with('success', 'Order Placed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   /*
        // Validation 
         $this->validate($request, [ 
            'category' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'title' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'body' => 'required|max:500',
            'price' => 'required',
            ]); 
           */ 

            // store
            $order = new Order;
            $order->category = $request->input('category');
            $order->title = $request->input('title');
            $order->comments = $request->input('comments');
            $order->quantity = $request->input('quantity');
            $order->price = $request->input('price');
            $order->table = $request->input('table');
            $order->seat = $request->input('seat');
            $order->save();

            // redirect
            return redirect('/orders')->with('success', 'Order Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
