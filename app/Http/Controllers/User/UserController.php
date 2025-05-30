<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Order;
use App\Models\Review;

class UserController extends Controller
{
    public function createOrder()
    {
        $packages = Package::all();
        return view('user.create_order', compact('packages'));
    }

    public function storeOrder(Request $request)
    {
        // Validate and store order
    }

    public function createReview()
    {
        $orders = auth()->user()->orders()->with('package')->get();
        return view('user.create_review', compact('orders'));
    }

    public function storeReview(Request $request)
    {
        // Validate and store review
    }
}