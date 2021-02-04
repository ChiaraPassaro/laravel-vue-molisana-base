<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        if($products->count()) {
           return response()->json([
                'response' => true,
                'count' => $products->count(),
                'result' => $products
            ]);
        }

        return response()->json([
            'response' => false,
            'result' => []
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json([
                'response' => true,
                'count' => 1,
                'result' => $product
            ]);
        }

        return response()->json([
            'response' => false,
            'count' => 0,
            'result' => []
        ]);
    }
    
    public function productsOfShape($shape) {

        $products = Product::where('shape_id', $shape)->get();

        if ($products->count()) {
            return response()->json([
                'response' => true,
                'count' => count($products),
                'result' => $products
            ]);
        }

        return response()->json([
            'response' => false, 
            'count' => 0,
            'result' => []
        ]);

    }
    
}
