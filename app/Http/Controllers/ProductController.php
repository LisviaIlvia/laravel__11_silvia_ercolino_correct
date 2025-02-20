<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;



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
       
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        if ($request->file('image')) {
            $product->image = $request->file('image')->store('image', 'public');
            $product->save();
         }

        return redirect()->back()->with('message', 'Prodotto aggiunto con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // dd($product);
        return view('products.show-product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update([

            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            
        ]);

        if ($request->file('image')) {
            $product->image = $request->file('image')->store('image', 'public');
            $product->save();
         } 


        return redirect()->back()->with('message', 'Prodotto aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Elimina il prodotto dal database
        $product->delete();

        // Reindirizza con un messaggio di conferma
        return redirect()->back()->with('message', 'Prodotto eliminato con successo!');
    }
}
