<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('created_at', 'DESC')->paginate(5);
        // $products = Product::where('category_id', '=', 1)->where('price', '>', 100)->orderBy('name')->get();
        // $products = Product::where('category_id', '=', 1)->where('price', '>', 100)->orderBy('name')->first();
        // $products = Product::where('category_id', '=', 1)->where('price', '>', 100)->orderBy('name')->paginate(3);
        // $products = Product::with('category')->get();
        // dump($products);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image'
        ]);

        $product = Product::create($request->all());

        if($request->image){
            $path = $request->file('image')->store();
            $product->image = 'storage/' . $path;
            $product->save();
        }


        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
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