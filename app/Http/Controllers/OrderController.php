<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\StoreRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request;
        foreach ($request->orderProductIdAndQuantity as $key => $value) {
        
            $totalCost = Product::find(intval($key))->price * $value;
        // try {
                $order = Order::create([
                    // 'user_id' => $request->userId,
                    'user_id' => Auth::id(),
                    'delivery_address' => $request->delivery_address,
                    'orderComemnt' => $request->orderComemnt,
                    // 'product_id' => intval($key),
                    'quantity' => $value,
                    'totalCost' => $totalCost,
                    'status' => 'Cоздан'
                ]);

                $order->products()->attach(intval($key));
            // } catch (Throwable $ex) {
                // return $ex;
                // return dd($request->orderProductIdAndQuantity);
            // }
        }
        // dd($order);
        return redirect('purchase_history');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
