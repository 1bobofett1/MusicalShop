<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @OA\Schema(
 *     title="User",
 *     description="Модель пользователя",
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
 *         example="Ruslan"
 *     ),
 *     @OA\Property(
 *         property="surname",
 *         description="Фамилия",
 *         type="string",
 *         example="Farvaev"
 *     ),
 *     @OA\Property(
 *         property="patronymic",
 *         description="Отчество",
 *         type="string",
 *         example="Rinatovich"
 *     ),
 *     @OA\Property(
 *         property="phone",
 *         description="Номер телефона",
 *         type="string",
 *         example="+123456789"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         description="Почта",
 *         type="string",
 *         format="email",
 *         example="user@example.com"
 *     ),
 *     @OA\Property(
 *         property="password",
 *         description="Пароль",
 *         type="string",
 *         format="password"
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

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Проверка на администратора
    public function isAdmin()
    {
      return $this->is_admin === 1;  
    }
}
