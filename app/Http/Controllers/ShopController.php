<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops=Shop::all();
        return response()->json($shops);
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
        request()->validate([

            'name'=>'required',
            'address'=>'required',
            'phone_no'=>'required',
            'branch_no'=>'required',
        ]);

        $shop=new Shop;
        $shop->name=$request->name;
        $shop->address=$request->address;
        $shop->phone_no=$request->phone_no;
        $shop->branch_no=$request->branch_no;

        $shop->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop= Shop::find($id);
        return response()->json($shop);

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
        request()->validate([

            'name'=>'required',
            'address'=>'required',
            'phone_no'=>'required',
            'branch_no'=>'required',
        ]);

        $shop= Shop::find($id);
        $shop->name=$request->name;
        $shop->address=$request->address;
        $shop->phone_no=$request->phone_no;
        $shop->branch_no=$request->branch_no;

        $shop->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop=Shop::find($id);
        $shop->sales()->delete();
        $shop->customers()->delete();
        $shop->products()->delete();
        $shop->delete();


    }
}
