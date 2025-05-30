<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Package;
use App\Models\Review;
use App\Models\Order;

class AdminController extends Controller
{
    public function responses()
    {
        $orders = Order::with('user', 'package')->latest()->get();
        return view('admin.responses', compact('orders'));
    }

    public function createCategory()
    {
        return view('admin.create_category');
    }

    public function storeCategory(Request $request)
    {
        $request->validate(['name' => 'required']);
        Category::create(['name' => $request->name]);
        return redirect()->back()->with('success', 'Category created.');
    }

    public function createPackage()
    {
        $categories = Category::all();
        return view('admin.create_package', compact('categories'));
    }

    public function storePackage(Request $request)
    {
        // Add validation and creation logic here
    }

    public function manageReviews()
    {
        $reviews = Review::with('user', 'package')->latest()->get();
        return view('admin.manage_reviews', compact('reviews'));
    }
}
