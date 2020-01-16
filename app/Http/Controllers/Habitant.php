<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class Habitant extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', ['customers' =>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'bail|required|between:5,20|alpha',
            'address' =>'bail|required',
            'phone' =>'bail|required|integer',
            'email' =>'bail|required|max:35|email|unique:customers'
            ]);
      $customer = new Customer;
      $customer->name = request('name');
      $customer->address = request('address');
      $customer->phone = request('phone');
      $customer->email = request('email');
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
        $customer = Customer::find($id);
        return view('customers.edit', ['customer' => $customer]);
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

        $name = request('name');
        $address = request('address');
        $phone = request('phone');
        $email = request('email');
        Customer::find($id)->update(['name' => $name, 'address' => $address, 'phone' => $phone, 'email' => $email]);
         return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect('index');
    }
}
