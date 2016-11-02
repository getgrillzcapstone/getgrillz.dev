<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Manufacturer;
use DB;

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
