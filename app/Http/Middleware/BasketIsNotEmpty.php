<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    //Проверка есть ли у пользователя что-то в корзине, если нет, то выводится сообщение
    public function handle(Request $request, Closure $next)
    {
        $orderId = session(key:'orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);

            if ($order->products->count() == 0) {
                session()->flash('warning','Ваша корзина пуста!');
                return redirect()->route('body');
            }
        }

        return $next($request);
    }
}
