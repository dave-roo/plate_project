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
                $items = Item::all();
                $select = [];
                $selprice = [];
                foreach($items as $item){
                    $selprice[$item->id] = $item->price;
                    $select[$item->id] = $item->title;
                    }                

                // load the view and pass the nerds
                return view('orders.index', compact('orders'), compact('selprice', 'select'));
                    //->with('orders', $orders); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        $select = [];
        $selprice = [];
        foreach($items as $item){
            $select[$item->id] = $item->title;
            $selprice[$item->id] = $item->price;
        }
        return view('orders.create', compact('select', 'selprice'));
        //    ->with('items', $items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
		   
		    $count = DB::table('orders')->max('id');
		   	for ($x = 1; $x < 6; $x++) {
			if($request->input('quantity_'.$x) >= 1){
				$order = new Order;
				
				$categoryinput = $request->input('category_'.$x);
				
				if($categoryinput == "Entree" || $categoryinput == "Main" || $categoryinput == "Dessert" || $categoryinput == ""){
					$order->category = $request->input('category_'.$x);	
				}
				else{
					return back()->withErrors('Incorrect Category -'.$x);				
				}
				
				$order->orderid = $count;
								
				if($request->input('title_'.$x) != null){
					$order->name = $request->input('title_'.$x);
					$order->title = $request->input('title_'.$x);
					$order->description = $request->input('title_'.$x);
				}
				else{
					return back()->withErrors(' Meal not selected -'.$x);
				}
				
				if($request->input('comments_'.$x) == null){
					$order->comments = "None";
				}
				
				if($request->input('quantity_'.$x) > 0) {
					$order->quantity = $request->input('quantity_'.$x);
				}
				else{
					return back()->withErrors('Quantity not entered -'.$x);
				}
				
				if($request->input('price_'.$x) > 0) {
					$order->price = $request->input('price_'.$x);
				}
				else{
					return back()->withErrors(' Price Error -'.$x);
				}
				
				if($request->input('table_'.$x) > 0) {
					$order->table = $request->input('table_'.$x);
				}
				else{
					return back()->withErrors(' Table not selected -'.$x);
				}
						
				if($request->input('seat_'.$x) > 0) {
					$order->seat = $request->input('seat_'.$x);
				}
				else{
					return back()->withErrors(' Seat not selected -'.$x);
				}
				
				$order->save();
			}
			}
			
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
        $order = Order::find($id);

        // show the view and pass the nerd to it
        return view('orders.show')
            ->with('order', $order);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $order = Order::find($id);
                $items = Item::all();
        $select = [];
        $selprice = [];
        foreach($items as $item){
            $select[$item->id] = $item->title;
            $selprice[$item->id] = $item->price;
        }
        //return view('orders.create', compact('select'), compact('selprice'));
        //    ->with('items', $items);

        // show the edit form and pass the nerd
        return view('orders.edit', compact('order'), compact('select', 'selprice'));
        //    ->with('order', $order);

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
            $order = Order::find($id);
            $order->orderid = $request->input('orderid');
            $order->category = $request->input('category');
            $order->title = $request->input('title');
            $order->comments = $request->input('comments');
            $order->quantity = $request->input('quantity');
            $order->price = 29;//$request->input('price');
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
        // delete
        $order = Order::find($id);
        $order->delete();

        // redirect
        return redirect('/orders')->with('success', 'Order Removed');
    }
	
    public function getmains()
    {
		$category = "Main";
		$list = array();
		$j = 0;
		
		for ($x = 1; $x <= 100; $x++) {

			$meal = DB::table('menus')->where('id', $x)->where('category', $category)->first();
			
			if($meal){
				if ($meal->category == $category) {
					$j++;
					$list[$j] = $meal->title;
				}
			}
			
		}
		
        return $list;
    }
	
    public function getentrees()
    {
		$category = "Entree";
		$list = array();
		
		for ($x = 1; $x <= 100; $x++) {

			$meal = DB::table('menus')->where('id', $x)->where('category', $category)->first();
			
			if($meal){
				if ($meal->category == $category) {
					$list[$x] = $meal->title;
				}
			}
		}
		
        return $list;
    }
	
    public function getdesserts()
    {
		$category = "Dessert";
		$list = array();
		
		for ($x = 1; $x <= 100; $x++) {

			$meal = DB::table('menus')->where('id', $x)->where('category', $category)->first();
			
			if($meal){
				if ($meal->category == $category) {
					$list[$x] = $meal->title;
				}
			}
		}
		
        return $list;
    }
	
    public function getprice()
    {
		$list = array();
		
		for ($x = 1; $x <= 100; $x++) {

			$meal = DB::table('menus')->where('id', $x)->first();
			
			if($meal){
				$list[$meal->title] = $meal->price;
			}
		}
		
        return $list;
    }
	
	
}
