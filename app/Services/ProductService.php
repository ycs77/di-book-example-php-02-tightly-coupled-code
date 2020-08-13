<?php

namespace App\Services;

use App\Product;
use Illuminate\Support\Enumerable;

// ---- Code Listing 2.3 ----
class ProductService
{
    public function getFeaturedProducts(bool $isCustomerPreferred): Enumerable
    {
        $discount = $isCustomerPreferred ? 0.95 : 1;

        /** @var \Illuminate\Database\Eloquent\Collection */
        $featuredProducts = Product::where('is_featured', true)->get();

        return $featuredProducts->map(function (Product $product) use ($discount) {
            $product->unit_price = round($product->unit_price * $discount);
            return $product;
        });
    }
}
