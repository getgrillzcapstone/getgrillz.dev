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
    public function index()
    {
        $mans = session('man');
        $fueltype = session('fuel');
        $size = session('size');
        $sortByPrice = session('sortByPrice');

        is_array($fueltype) ? $fueltype : settype($fueltype, 'array');
        is_array($size) ? $size : settype($size, 'array');
        $fueltype = $fueltype == null ? ['1', '2'] : $fueltype;
        if (!empty($size)) {
            $size = ($size[0] == "" && $size[1] == "" && $size[2] == "") ? ['Small', 'Medium', 'Large'] : $size;
        }

        $items = Item::where('id','LIKE','%');

        // $items = DB::table('items')->whereIn('manufacturer_id', $mans)->whereIn('size', $size)->whereIn('item_category_id', $fueltype)->get();

        if(!empty($mans)){
            $items->whereIn('manufacturer_id', $mans);
        }

        if(!empty($size)){
            $items->whereIn('size', $size);
        }

        if(!empty($fueltype)){
            $items->whereIn('item_category_id', $fueltype);
        }

        if(!empty($sortByPrice)) {
            $items->orderBy('price', $sortByPrice);
        }

        // dd($items);
        $items = $items->paginate(9);
        $manufacturers = Manufacturer::all();

        $id_list = [3, 7, 8, 9, 10, 11, 12];
        $GrillInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();
        $id_list = [4, 5, 6, 13];
        $PartyInventory = DB::table('items')->whereIn('item_category_id', $id_list)->get();

        if (session('order_type') == 'rent') {
            foreach ($items as $item) {
                $item->price = $item->rentPrice();
            }
        }

        return view('items', ['items' => $items, 'manufacturers' => $manufacturers,'grillInventory' => $GrillInventory, 'partyInventory' => $PartyInventory]);
        // return view('items', ['items' => $items->get(), 'manufacturers' => $manufacturers]);

    }

    public function clearSelections()
    {
        session()->forget(['man', 'fuel', 'size', 'sortByPrice']);
        return redirect()->action('ItemController@index');
    }

    public function saveSelections()
    {
        // dd(request()->all());
        $mans = request()->input('man');
        $fueltype = request()->input('fuel');
        $size = request()->input('size');
        // dd($size);
        $sortByPrice = request()->input('sortByPrice');
        session(['man' => $mans, 'fuel' => $fueltype, 'size' => $size, 'sortByPrice' => $sortByPrice]);
        return redirect(action('ItemController@index'));
    }

}
