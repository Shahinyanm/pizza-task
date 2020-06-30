<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\Food;
use App\User;
use Illuminate\Http\Request;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($orderUuid)
    {
        return Order::where('orderUuid', '=', $orderUuid)->firstOrFail();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update($orderUuid, Request $request)
    {
        $inputs = $request->all();
        $foods = Food::all();
        $data = $inputs['data'];
        $total = 0;

        foreach ($data as $foodId => $count) {
            $price = $foods->firstWhere('id', '=', $foodId)->price;
            $total += $count * $price;
        }

        $order = Order::firstOrNew(['orderUuid' => $orderUuid]);
        $order->total = $total;
        $order->data = $data;
        $order->save();

        return $order;
    }

    /**
     * Submit Order.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function submit($orderUuid, $userUuid, Request $request)
    {
        $inputs = $request->all();

        $user = User::updateOrCreate(['uuid' => $userUuid],
            $inputs
        );
        
        Order::where('orderUuid', $orderUuid)->update(['user_id' => $user->id]);
        return Order::where('orderUuid', $orderUuid)->first();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
