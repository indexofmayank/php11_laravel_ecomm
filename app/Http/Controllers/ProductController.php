<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function shop(Request $request, $purl) {
        // dd($purl);
        $products = Products::where('url', '=', $purl)->paginate(6);
        return view('/components/product_listing', compact('products'));
    }
}
