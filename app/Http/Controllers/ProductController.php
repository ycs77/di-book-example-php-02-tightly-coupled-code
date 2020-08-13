<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

// ---- Code Listing 2.4 ----
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $isPreferredCustomer = optional($request->user())->is_preferred_customer ?? false;

        $productService = new ProductService();

        $products = $productService->getFeaturedProducts($isPreferredCustomer);

        return view('products.index', [
            'products' => $products,
        ]);
    }
}
