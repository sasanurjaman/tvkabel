<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        while ($id  <= Customer::count()) {
            // get customer && packet
            $customers = Customer::where('id', $id)->get();
            foreach ($customers as $customer) {
                $data['customerName'] = $customer->customerName;
                $data['customerPacket'] = $customer->packet->packetName;
                $pays = Payment::where('customer_id', $id)->get();
            }

            $date = date('Y');
            $pays = Payment::where('year', $date)->where('customer_id', $id)->get();

            $jan = 0;
            $feb = 0;
            $mart = 0;
            $apr = 0;
            $mey = 0;
            $jun = 0;
            $jul = 0;
            $augs = 0;
            $sept = 0;
            $okt = 0;
            $nov = 0;
            $des = 0;
            foreach ($pays as $pay) {
                $jan = $pay->jan;
                $feb = $pay->feb;
                $mart = $pay->mart;
                $apr = $pay->apr;
                $mey = $pay->mey;
                $jun = $pay->jun;
                $jul = $pay->jul;
                $augs = $pay->augs;
                $sept = $pay->sept;
                $okt = $pay->okt;
                $nov = $pay->nov;
                $des = $pay->des;
            }

            if ($pays = null) {
                $data['jan'] = 0;
                $data['feb'] = 0;
                $data['mart'] = 0;
                $data['apr'] = 0;
                $data['mey'] = 0;
                $data['jun'] = 0;
                $data['jul'] = 0;
                $data['augs'] = 0;
                $data['sept'] = 0;
                $data['okt'] = 0;
                $data['nov'] = 0;
                $data['des'] = 0;
            } else {
                $data['jan'] = $jan;
                $data['feb'] = $feb;
                $data['mart'] = $mart;
                $data['apr'] = $apr;
                $data['mey'] = $mey;
                $data['jun'] = $jun;
                $data['jul'] = $jul;
                $data['augs'] = $augs;
                $data['sept'] = $sept;
                $data['okt'] = $okt;
                $data['nov'] = $nov;
                $data['des'] = $des;
            }
            $payments[] = $data;
            $id++;
        }

        return view('payment.index', [
            'payments' => $payments
        ]);
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
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
