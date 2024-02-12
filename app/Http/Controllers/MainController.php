<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    function index(): View
    {
        $latestProducts = Product::orderBy('created_at', 'DESC')->limit(8)->get();
        return view('index', compact('latestProducts'));
    }

    function contacts(): View
    {
        return view('main.contacts');
    }

    function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:32',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //dd( $request->all() );
        // return redirect('/contacts');
        // return redirect()->route('contacts');
        // return to_route('contacts');
        return back()->with('success', 'Thank!');
    }

    function product(Product $product)
    {
        return view('catalog.singleProduct', compact('product'));
    }
}
