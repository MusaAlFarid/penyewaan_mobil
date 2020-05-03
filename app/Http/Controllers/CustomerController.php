<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->customer = new Customer();
    }

    public function index()
    {
        $no = 1;
        $data = Customer::all();
        return view('backend.customer.index',compact('data','no'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customer.create');
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
            'name' => 'required',
            'address' => 'required',
            'nik' => 'required',
            'phone_number' => 'required',
            'email' => 'required'

        ]);

        Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'nik' => $request->nik,
            'phone_number' => $request->phone_number,
            'email' => $request->email
        ]);

        alert()->success('Berhasil','Data telah ditambahkan!');
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->customer->destroy($id);
        alert()->success('Berhasil','Data berhasil dihapus!');
        
        return redirect()->route('customer.index');
    }
}
