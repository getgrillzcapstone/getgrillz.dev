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

    public function addToCart(Request $request, $id = -1)
    {
        $mans = request()->input('man');
        $fueltype = request()->input('fuel');
        $size = request()->input('size');
        $sortByPrice = request()->input('sortByPrice');
        $order_id = session()->has('order_id') ? session()->get('order_id') : -1;
        $order = Order::firstOrNew(['id' => $order_id]);
        $order->save();
        $id = $id !== -1 ? $id : $request->input('extraItem');
        $order->items()->attach($id);
        $order_id = $order->id;
        session(['order_id' => $order_id]);
        $orderItemsCount = $order->items->count();
        session(['order_items_count' => $orderItemsCount]);
        // $id_list = [3, 7, 8, 9, 10, 11, 12];
        // $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        // $id_list = [4, 5, 6, 13];
        // $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        if ($orderItemsCount === 1) {
            $request->session()->flash('addToCartMessage', "Item Has Been Added! You Have $orderItemsCount Item In Your Cart");
        } else {
            $request->session()->flash('addToCartMessage', "Item Has Been Added! You Have $orderItemsCount Items In Your Cart");
        }
        // return redirect('ItemController@index')->with(['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
        return redirect(action('ItemController@index'));
    }

    public function getCart() {
        $order_id = session()->has('order_id') ? session()->get('order_id') : -1;
        $order = Order::firstOrNew(['id' => $order_id]);
        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        if ($order == null) {
            return view('confirmOrder', ['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
        }

        $items = $order->items;

        if (session('order_type') == 'rent') {
            foreach ($items as $item) {
                $item->price = $item->rentPrice();
            }
        }

        $order->total();
        $order->save();
        $order_id = $order->id;
        session(['order_id' => $order_id]);

        return view('confirmOrder', ['orderItems' => $items, 'grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory, 'order' => $order]);
    }

    public function clearCart(Request $request) {
        $request->session()->forget('order_id');
        $request->session()->forget('order_items_count');
        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $request->session()->flash('clearCartMessage', "Your Cart Is Now Empty!");
        return redirect('/items')->with(['grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
    }

    public function removeItem(Request $request)
    {
        $id = $request->input('item_id');
        $order_id = session()->has('order_id') ? session()->get('order_id') : -1;
        $order = Order::find($order_id);
        $order->items()->detach($id);
        $order->save();
        $orderItemsCount = $order->items->count();
        session(['order_items_count' => $orderItemsCount]);
        return redirect()->action('OrderController@getCart');
    }
}
