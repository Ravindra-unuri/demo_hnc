<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OnlineShop;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function create()
    {
        $categories = ProductCategory::all();
        $shops = OnlineShop::all();
        return view('products.create', compact('categories', 'shops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_category_id' => 'required',
            'online_shop_id' => 'required',
            'name' => 'required|string|max:255',
            'image' => 'required|max:8192',
            'description' => 'nullable|string',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Create products folder if not exists
            $destinationPath = public_path('products');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName); // save directly to public/products
        }


        Product::create([
            'product_category_id' => $request->product_category_id,
            'online_shop_id' => $request->online_shop_id,
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return view('products.index');
    }


    public function index()
    {
        $products = Product::with(['category', 'onlineShop'])
            ->paginate(10);

        return view('products.index', compact('products'));
    }
}
