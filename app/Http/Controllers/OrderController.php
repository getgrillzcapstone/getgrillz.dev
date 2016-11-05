<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use App\ItemCategory;
use App\OrderItem;
use App\User;
use App\Manufacturer;
use DB;
use Session;

class OrderController extends Controller
{

    public function rent()
    {
        // session()->flush();
        session(['order_type' => 'rent']);
        // dd(session(['file']));
        // dd(session()->all());
        return view('createOrderRent');
    }



    public function buy()
    {

        // session()->flush();
        session(['order_type' => 'buy']);
        // dd(session()->all());
        return view('createOrderBuy');
    }

    public function addToCart(Request $request, $id)
    {
        // dd($id);
        // $item = Item::find($id);
        // dd(session());
        $order_id = session()->has('order_id') ? session()->get('order_id') : -1;

        $order = Order::firstOrNew(['id' => $order_id]);
        $order->save();
        $order->items()->attach($id);

        $order_id = $order->id;
        session(['order_id' => $order_id]);
        // dd(session('order'));
        // dd(session(['order_id' => $order_id]));

        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();

        // dd(session(['order_id' => $order_id]));
        // dd($order->items());

        // dd($request);
        return redirect('/items')->with(['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
    }

    // public function addToCartExtraItems(Request $request, $id)
    // {
    //     // $item = Item::find($id);
    //     // dd(session());
    //     $order_id = session()->has('order_id') ? session()->get('order_id') : -1;
    //
    //     $order = Order::firstOrNew(['id' => $order_id]);
    //     $order->items()->attach($id);
    //     $order->save();
    //     $order_id = $order->id;
    //     session(['order_id' => $order_id]);
    //     // dd(session(['order_id' => $order_id]));
    //     // dd($order->items());
    //     // dd($request['request']);
    //
    //     return redirect()->action('OrderController@getCart');
    //     // return view('checkout');
    // }

    public function getCart() {
        $order_id = session()->has('order_id') ? session()->get('order_id') : -1;
        $order = Order::find($order_id);
        // dd($order->items);
        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        if ($order == null) {
            return view('confirmOrder', ['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
        }
        return view('confirmOrder', ['orderItems' => $order->items, 'grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
    }

    public function clearCart(Request $request) {
        $request->session()->forget('order_id');
        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        return redirect('/items')->with(['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
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
