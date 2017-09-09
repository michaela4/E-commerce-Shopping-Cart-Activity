<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingInfo;
use App\Product;

class ShippingInfoController extends Controller
{
    public function saveShippingInfo (Request $request){
        $info = new ShippingInfo;
        $info->company = $request->company;
        $info->address = $request->address;
        $info->postal_code = $request->postal_code;
        $info->phone = $request->phone;
        $info->save();

        return view('products.index');
    }

    public function paymentDetails (){
    	$products = Product::all();
		return view('products.paymentDetails', compact('products'));

    }
}
