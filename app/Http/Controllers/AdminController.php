<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userCount = User::count();
        $productCount = Product::count();
        $categoryCount = Category::count();

        return view('admin.dashboard', compact('userCount', 'productCount', 'categoryCount'));
    }
}
