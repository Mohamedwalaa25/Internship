<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $product = Product::query()->with('category:id,title')->get();

        return ProductResource::collection($product);
    }

    public function show(string $id)
    {
        $product = Product::with('category:id,title')->findOrFail($id);
        if (!$product) {
            return response()->json([
                'Message' => 'Product Not found'
            ], 422);
        } else
            return new ProductResource($product);
    }

}
