<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        $products->dd();
        
        // $input = [
        //     'name' => 'Gold',
        //     'body' => 'This is a Gold',
        //     'status' => ProductStatus::ACTIVE
        // ];

        // $product = Product::create($input);

        // dd($product->status, $product->status->value);
    }
}
