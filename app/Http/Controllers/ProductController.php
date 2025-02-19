<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'I Nostri Prodotti';
        $products = Product::all();
        return view('products.index-product', compact('title', 'products')); 
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images', 'public');
        } else {

            $imagePath = 'public/images/default.jpg';
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('message', 'Prodotto aggiunto con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // dd($product);
        return view('products.show-aproduct', compact('product'));
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
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
