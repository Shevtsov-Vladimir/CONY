<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class AdminController extends Controller
{
    
    public function index() {
        $products = Product::all();
        $categories = Category::all();
        $orders = Order::with('products', 'user')->orderByDesc('created_at')->get();


        $order_statuses = ['Создан', 'Принят', 'Отклонён'];
        return view('admin.home', ['products' => $products, 'categories' => $categories, 'orders' => $orders, 'order_statuses' => $order_statuses]);
    }
}
