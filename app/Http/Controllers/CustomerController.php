<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Packet;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'packet_id' => 'required',
            'customerCode' => 'required|max:8',
            'customerName' => 'required|max:50',
            'customerAddress' => 'required',
            'customerEmail' => 'required|email:rfc,dns|max:50',
            'customerPhone' => 'required|max:20',
        ]);

        return $validateData;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.index', [
            'customers' => Customer::all()->sortBy('customerName'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create', [
            'packets' => Packet::all()->sortBy('packetName'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validateData($request);

        Customer::create($validateData);

        return redirect('/customer')->with(
            'success',
            "Pelanggan $request->customerName Berhasil Ditambahkan!"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show', [
            'customer' => $customer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', [
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validateData = $this->validateData($request);

        Customer::where('id', $customer->id)->update($validateData);

        return redirect('/customer')->with(
            'success',
            "Pelanggan $request->customerName berhasil diubah!"
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return back()->with(
            'success',
            "Pelanggan $customer->customerName berhasil dihapus!"
        );
    }
}
