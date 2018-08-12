<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Item;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // get all the nerds
                $items = Item::all();

                // load the view and pass the nerds
                return view('items.index')
                    ->with('items', $items); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'title' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'body' => 'required|max:25',
            'price' => 'required',
            ]);


            // store
            $item = new Item;
            $item->category = $request->input('category');
            $item->title = $request->input('title');
            $item->body = $request->input('body');
            $item->price = $request->input('price');
            $item->save();

            // redirect
            return redirect('/items')->with('success', 'Item Created');
       // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
// get the nerd
$item = Item::find($id);

// show the view and pass the nerd to it
return view('items.show')
    ->with('item', $item);

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
$item = Item::find($id);

// show the edit form and pass the nerd
return view('items.edit')
    ->with('item', $item);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // validate
        $this->validate($request, [
            'category' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'title' => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'body' => 'max:25|required',
            'price' => 'required|between:0,999.99',
            ]);

            // store
            $item = Item::find($id);
            $item->category = $request->input('category');
            $item->title = $request->input('title');
            $item->body = $request->input('body');
            $item->price = $request->input('price');
            $item->save();

            // redirect
            return redirect('/items')->with('success', 'Item Updated');
        //}
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
        $item = Item::find($id);
        $item->delete();

        // redirect
        return redirect('/items')->with('success', 'Item Removed');
    }
}
