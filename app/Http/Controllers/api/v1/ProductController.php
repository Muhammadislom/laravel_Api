<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\ProductStoreRequest;
use App\Http\Requests\api\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public function index()
    {
        return ProductResource::collection(Product::all());

    }

    public function store(ProductStoreRequest $request)
    {
        return new ProductResource(Product::create($request->validated()));
    }

    public function show($id)
    {
        return new ProductResource(Product::findOrFail($id));
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->update($request->validated());
        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
