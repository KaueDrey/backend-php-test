<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductPostRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * @var Product
     */
    protected $_product;

    public function __construct(
        Product $product
    ) {
        $this->_product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->_product->all();
        return ProductResource::collection($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $productId
     * @return \Illuminate\Http\Response
     */
    public function show($productId)
    {
        $product = $this->_product->findOrFail($productId);
        return new ProductResource($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\ProductPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPostRequest $request)
    {
        $productCreated = $this->_product->create($request->all());
        if ($productCreated) {
            return [
                'message' => 'success'
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $productId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productId)
    {
        $product = $this->_product->findOrFail($productId);
        $productUpdated = $product->update($request->all());
        if ($productUpdated) {
            return [
                'message' => 'success'
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $productId
     * @return \Illuminate\Http\Response
     */
    public function destroy($productId)
    {
        $product = $this->_product->findOrFail($productId);
        if ($product->delete()) {
            return [
                'message' => 'success'
            ];
        }
    }
}
