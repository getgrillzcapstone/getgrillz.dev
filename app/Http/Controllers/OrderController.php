<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use App\Manufacturer;
use DB;
use Session;

class OrderController extends Controller
{

    public function rent()
    {
        session()->flush();
        session(['order_type' => 'rent']);
        // dd(session()->all());
        return view('createOrderRent');
    }



    public function buy()
    {

        session()->flush();
        session(['order_type' => 'buy']);
        // dd(session()->all());
        return view('createOrderBuy');
    }

    public function addToCart(Request $request, $id)
    {
        // $item = Item::find($id);
        $order_id = 1;
        $item_id = 10;

        $order = Order::firstOrNew(['id' => $order_id]);
        $order->items()->attach($item_id);
        $order->save();
        // dd($order->items());

        return redirect()->action('ItemController@index');

        // $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Cart($oldCart);
        // $cart->add($item, $item->$id);
        //
        // $request->session()->put('cart', $cart);
        // // return $this->getCart();
        // return redirect()->action('ItemController@index');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('/checkout');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd($cart);
        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        return view('checkout', ['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory, 'cartItems' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
