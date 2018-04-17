<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponsController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            if (auth()->user()) {
                return redirect()->route('checkout.index')->withErrors('Invalid coupon code. Please try again.');
            }

            return redirect()->route('guestCheckout.index')->withErrors('Invalid coupon code. Please try again.');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);

        if (auth()->user()) {
            return redirect()->route('checkout.index')->with('success_message', 'Coupon has been applied!');
        }

        return redirect()->route('guestCheckout.index')->with('success_message', 'Coupon has been applied!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

        if (auth()->user()) {
            return redirect()->route('checkout.index')->with('success_message', 'Coupon has been removed.');
        }

        return redirect()->route('guestCheckout.index')->with('success_message', 'Coupon has been removed.');
    }
}
