<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Product",
 *     description="Модель товара",
 *     @OA\Property(
 *         property="id",
 *         description="ID",
 *         type="integer",
 *         format="int64",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="title",
 *         description="Название",
 *         type="string",
 *         example="Product Title"
 *     ),
 *     @OA\Property(
 *         property="price",
 *         description="Цена",
 *         type="number",
 *         format="float",
 *         example=100
 *     ),
 *     @OA\Property(
 *         property="new_price",
 *         description="Новая цена, если имеется",
 *         type="number",
 *         format="float",
 *         example=90
 *     ),
 *     @OA\Property(
 *         property="in_stock",
 *         description="В наличии(1), не в наличии(0)",
 *         type="boolean",
 *         example=true
 *     ),
 *     @OA\Property(
 *         property="category_id",
 *         description="ID соответствующей категории",
 *         type="integer",
 *         format="int64",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="description",
 *         description="Описание товара",
 *         type="string",
 *         example="Product description"
 *     ),
 *     @OA\Property(
 *         property="img",
 *         description="Image URL",
 *         type="string",
 *         format="url",
 *         example="http://example.com/product-image.jpg"
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
 *     )
 * )
 */

class Product extends Model
{
    
    protected $fillable = ['title', 'price', 'in_stock', 'category_id', 'description', 'new_price','img'];

    use HasFactory;
    public function images(){
        return $this->hasMany('App\Models\ProductImage');
    }

    /**
     * @OA\Property(
     *    property="category",
     *    description="Продукт пренадлежащий категории",
     *    ref="#/components/schemas/Category"
     * )
     */

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }


    //Определение общей цены товаров
    public function getPriceForCount() {
        if(!is_null($this->pivot)) {
            return $this->pivot->count * $this->new_price;
        }
        return $this->new_price;
    }
}
