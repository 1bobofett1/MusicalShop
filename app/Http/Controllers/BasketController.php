<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class BasketController extends Controller
{
    public function basket() {
        $orderId = session(key:'orderId');
        // if (!is_null($orderId)) {
        //     $order = Order::findOrFail($orderId);
        // }
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        return view('basket', compact('order'));
    }

    // Сохранение заказа и перенаправление на главную страницу
    public function basketConfirm(Request $request){
        $orderId = session(key:'orderId');
        if (is_null($orderId)) {
            return redirect()->route('body');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);

        if ($success) {
            session()->flash('success','Ваш заказ принят в обработку');
        } else {
            session()->flash('warning','Произошла ошибка');
        }
        return redirect()->route('body');
    }

    public function basketPlace() {
        $orderId = session(key:'orderId');
        if (is_null($orderId)) {
            return redirect()->route('app');
        }
        $order = Order::find($orderId);
        return view('order',compact('order'));
    }


    //Добавление товара в Корзину
    public function basketAdd($product_id) 
    {
        $orderId = session(key:'orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($product_id);
        }

        if (Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }

        $product = Product::find($product_id);
        session()->flash('success','Добавлен товар:' . $product->title);

        return redirect()->route('basket');
    }

    //Удаление товара из корзины
    public function basketRemove($product_id)
    {
        $orderId = session(key:'orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($product_id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        $product = Product::find($product_id);
        session()->flash('warning','Удален товар:' . $product->title);

        return redirect()->route('basket');
    }
}
