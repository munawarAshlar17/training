<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers= Customer::all();
        return response()->json($customers);

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
            'age'=>'required',
            'sex'=>'required',
            'email'=>'required | email',
            'phone_no'=>'required',
            'address'=>'required',



        ]);

        $customer = new Customer;
        $customer->name= $request->name;
        $customer->age= $request->age;
        $customer->sex= $request->sex;
        $customer->email= $request->email;
        $customer->phone_no= $request->phone_no;
        $customer->address= $request->address;
        $customer->shop_id=$request->shop()->id;

        $customer->save();







    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $customer=Customer::find($id);
        return response()->json($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
        return response()->json($customer);


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
        request()->validate([

            'name'=>'required',
            'age'=>'required',
            'sex'=>'required',
            'email'=>'required | email',
            'phone_no'=>'required',
            'address'=>'required',



        ]);

        $customer =  Customer::find($id);
        $customer->name= $request->name;
        $customer->age= $request->age;
        $customer->sex= $request->sex;
        $customer->email= $request->email;
        $customer->phone_no= $request->phone_no;
        $customer->address= $request->address;
        $customer->shop_id=$request->shop()->id;

        $customer->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $customer= Customer::find($id);
        $customer->delete();
    }
}
