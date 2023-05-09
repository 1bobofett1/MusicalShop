<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasketTest extends TestCase
{
    use RefreshDatabase;

    private $user;
    private $categoryData;
    private $productData;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create([
            'name' => 'testusername',
            'surname' => 'testusersurname',
            'patronymic' => 'testuserpatronymic',
            'phone' => 'testuserphone',
            'email' => 'testuser@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $this->categoryData = [
            'id' => '1',
            'title' => 'Новая категория',
            'desc' => 'Описание категории',
            'img' => 'Новая фотография',
            'alias' => 'Новый алиас',
        ];

        Category::create($this->categoryData);

        $this->productData = [
            'id' => '1',
            'title' => 'Новый товар',
            'price' => '200',
            'new_price' => '150',
            'in_stock' => '1',
            'description' => 'Описание товара',
            'category_id' => '1',
        ];

        Product::create($this->productData);
    }

    public function testAddToCart()
    {
        $response = $this->actingAs($this->user)->post('/basket/add/' . $this->productData['id']);

        $response->assertStatus(302)->assertRedirect();

        $this->assertDatabaseHas('order_product', [
            'product_id' => $this->productData['id'],
        ]);
    }

    public function testRemoveFromBasket()
    {
        // Добавляем товар в корзину
        $this->actingAs($this->user)->post('/basket/add/' . $this->productData['id']);

        // Отправляем POST-запрос для удаления товара из корзины
        $response = $this->actingAs($this->user)->post('/basket/remove/' . $this->productData['id']);

        // Проверяем, что запрос был успешным и произошло перенаправление
        $response->assertStatus(302)->assertRedirect();

        // Проверяем, что товар был удален из корзины
        $this->assertDatabaseMissing('order_product', [
            'product_id' => $this->productData['id'],
        ]);
    }
}
