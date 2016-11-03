<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Manufacturer;
use DB;
use Session;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd(request()->input('fuel'));

        $fueltype = request()->input('fuel');
        $size = request()->input('size');

        session(['fueltype' => $fueltype]);
        session(['size' => $size]);

        $items = DB::table('items')->where('size', 'like', $size)->where('item_category_id', '=', $fueltype)->get();
        $manufacturers = Manufacturer::all();

        // dd($items);
        return view('items', ['items' => $items, 'manufacturers' => $manufacturers]);

    }

    public function manSort()
    {

        // dd(request()->input('fuel'));
       // dd(request()->input('man'));
       $mans = request()->input('man');
       $fueltype = request()->input('fuel');
        $size = request()->input('size');
       $items = DB::table('items')->where('manufacturer_id', $mans)->where('size', 'like', $size)->where('item_category_id', '=', $fueltype)->get();

       $manufacturers = Manufacturer::all();
       return view('items', ['items' => $items, 'manufacturers' => $manufacturers]);
       // return view('items', ['items' => $items->get(), 'manufacturers' => $manufacturers]);

    }

    public function getGrillSuppliesInventory()
    {
        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        return view('checkout', ['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Item::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->$id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return view('checkout');
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
        //
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
    {
        //
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
