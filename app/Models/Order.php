<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Order",
 *     description="Модель заказа",
 *     @OA\Property(
 *         property="id",
 *         description="ID",
 *         type="integer",
 *         format="int64",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="name",
 *         description="Имя",
 *         type="string",
 *         example="Ruslan Farvaev"
 *     ),
 *     @OA\Property(
 *         property="phone",
 *         description="Номер телефона",
 *         type="string",
 *         example="+123456789"
 *     ),
 *     @OA\Property(
 *         property="status",
 *         description="Статус заказа",
 *         type="integer",
 *         format="int32",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         description="Creation date and time",
 *         type="string",
 *         format="date-time"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         description="Last update date and time",
 *         type="string",
 *         format="date-time"
 *     ),
 *     @OA\Property(
 *         property="products",
 *         description="Товары в заказе",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Product")
 *     )
 * )
 */

class Order extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('count')->withTimestamps();
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function getFullPrice()
    {   
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function saveOrder($name, $phone){
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
        
    }
}
