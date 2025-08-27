<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class UsersideProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = ProductCategory::all();

        $categoryId = $request->input('category');

        $query = Product::with(['category', 'onlineShop']);

        if ($categoryId) {
            $query->where('product_category_id', $categoryId);
        }

        $products = $query->paginate(12);

        return view('product', compact('products', 'categories', 'categoryId'));
    }
}
