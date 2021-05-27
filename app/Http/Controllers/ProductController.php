<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;

class ProductController extends Controller
{
    public function index()
    {
        /* view(): lo que busca es ir a la carpeta resources/views */

        $products = Product::orderBy('id', 'desc')->paginate();
        
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProduct $request)
    {
        /* $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;

        $product->save(); */

        /* $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category
        ]); */

        $product = Product::create($request->all());

        return redirect()->route('products.show', $product);
        //return $request->all();
    }

    public function show(Product $product)
    {
        /* $product = Product::find($id); = Product $product*/ 
        /* compact('product'); = 'product' => $product */

        /* return view('products.show', ['product' => $product]); */
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        /* return $product; */
        /* $product = Product::find($id);
        return $product; */
        return view('products.edit', compact('product'));
    }

    public function update(UpdateProduct $request, Product $product)
    {
        /* $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->save(); */

        $product->update($request->all());
        
        /* return view('products.show', compact('product')); */
        return redirect()->route('products.show', $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
