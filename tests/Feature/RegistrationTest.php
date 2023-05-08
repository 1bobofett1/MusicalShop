<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegistration()
    {
        //Создаем массив с данными пользователя
        $userData = ([
            'name' => 'testusername',
            'surname' => 'testusersurname',
            'patronymic' => 'testuserpatronymic',
            'phone' => 'testuserphone',
            'email' => 'testuser@example.com',
            // 'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        // Отправляем POST-запрос для регистрации пользователя
        $response = $this->post('/register', $userData);

        // Проверяем, что регистрация прошла успешно и было выполнено перенаправление
        // 302 перенаправление на другую страницу
        $response->assertStatus(302);

        // Проверяем, что пользователь был сохранен в базе данных
        $this->assertDatabaseHas('users', [
            'email' => $userData['email'],
        ]);
    }
}
