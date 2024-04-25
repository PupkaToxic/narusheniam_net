<?php


use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase
{
    public function testEmptyFIO()
    {
        $_POST = [
            'FIO' => '',
            'phone_number' => '1234567890',
            'email' => 'test@example.com',
            'login' => 'test_user',
            'password' => 'test_password'
        ];

        require './config/signup.php';

        $this->assertEquals('Заполните все поля!', $_SESSION['message']);
    }

    public function testEmptyEmail()
    {
        $_POST = [
            'FIO' => 'Test User',
            'phone_number' => '1234567890',
            'email' => '',
            'login' => 'test_user',
            'password' => 'test_password'
        ];

        require './config/signup.php';

        $this->assertEquals('Заполните email!', $_SESSION['message']);
    }


    public function testEmptyPassword()
    {
        $_POST = [
            'FIO' => 'Test User',
            'phone_number' => '1234567890',
            'email' => 'test@example.com',
            'login' => 'test_user',
            'password' => ''
        ];

        require './config/signup.php';

        $this->assertEquals('Заполните паролЬ!', $_SESSION['message']);
    }

    // Другие тесты для остальных условий
}