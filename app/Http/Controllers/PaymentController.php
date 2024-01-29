<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function checkout()
    {
        return view('payment.checkout');
    }

    public function process(Request $request)
    {
        $request->validate([
            'direccion' => 'required',
            'numero_calle' => 'required',
            'codigo_postal' => 'required|max:5|min:5',
            'piso' => 'required',
            'municipio' => 'required',
            'provincia' => 'required',
            'card_number' => 'required|max:16|min:16',
            'cardholder_name' => 'required',
            'expiry_date' => 'required|date_format:m/y|after:' . Carbon::today()->format('m/y'),
            'cvv' => 'required|max:3|min:3',
        ]);

        Session::forget('cart');
        return view('payment.success');
    }

}
