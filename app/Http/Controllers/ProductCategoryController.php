<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function create()
    {
        return view('product_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        ProductCategory::create($request->only('name'));

        return back()->with('success', 'Category added successfully!');
    }

    public function index()
    {
        $productCategories = ProductCategory::paginate(10);
        return view('product_categories.index', compact('productCategories'));
    }
}
