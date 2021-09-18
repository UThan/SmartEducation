<?php

namespace App\Http\Controllers;

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
        $payments = Payment::orderBy('id', 'desc')->paginate(10);
        return view('admin.payment.index', ['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validatePayment($request);
        $payment = new Payment;
        $payment->student_id = $request->student_id;
        $payment->type = $request->type;
        $payment->amount = $request->amount;
        $payment->currency = $request->currency;
        $payment->save();
        return redirect()->back()->with('success', 'Successfully added');
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
    public function update(Request $request, $id)
    {
        $this->validatePayment($request);
        $payment = Payment::find($id);
        $payment->student_id = $request->student_id;
        $payment->type = $request->type;
        $payment->amount = $request->amount;
        $payment->currency = $request->currency;
        $payment->save();
        return redirect()->back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->back()->with('success', 'Successfully deleted');
    }

    private function validatePayment(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'type' => 'required',
            'amount' => 'required|integer',
            'currency' => 'required',
        ]);
    }
}
