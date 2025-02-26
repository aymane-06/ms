<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($products);
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("productCreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {   
        // dd($request->description);
        Product::create([
            'name'=> $request->name,
            'description'=>$request->description,
            'price'=>$request->price
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {   
        $products1=[];
        $products = Product::all()->sortByDesc('price');
        // SELECT * FROM products ORDER BY price DESC 
        foreach($products as $product){
            $products1[]=$product;
        }
        return response()->json($products1);
        //  echo json_encode($products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
