<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;


class Curd extends Controller
{
    public function delete(Request $request,$cartid ){
        // echo "working";
        // dd($cartid);
     $cart=Cart::where('cartid',$cartid);
$cart->delete();
return redirect()->route('cart');
    }


}
