<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Category",
 *     description="Модель категории",
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
 *         example="Category Title"
 *     ),
 *     @OA\Property(
 *         property="desc",
 *         description="Описание",
 *         type="string",
 *         example="Category description"
 *     ),
 *     @OA\Property(
 *         property="alias",
 *         description="Алиас для обращения",
 *         type="string",
 *         example="category-alias"
 *     ),
 *     @OA\Property(
 *         property="img",
 *         description="Image URL",
 *         type="string",
 *         format="url",
 *         example="http://example.com/category-image.jpg"
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

class Category extends Model
{
    /**
     * @OA\Property(
     *    property="products",
     *    description="Сопутствующие товары",
     *    @OA\Schema(
     *        type="array",
     *        @OA\Items(ref="#/components/schemas/Product")
     *    )
     * )
     */
    protected $fillable = ['title','desc','alias','img'];

    use HasFactory;
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
}
