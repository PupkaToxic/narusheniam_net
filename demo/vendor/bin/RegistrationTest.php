<?php

require_once '../config/signup.php';

use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase
{
    public function testEmptyFIO()
    {
        $formData = [
            'FIO' => '',
            'phone_number' => '1234567890',
            'email' => 'test@example.com',
            'login' => 'test_user',
            'password' => 'test_password'
        ];

        $registration = new Registration();
        $result = $registration->processRegistration($formData);

        $this->assertEquals('Заполните все поля!', $result);
    }

    public function testEmptyEmail()
    {
        $formData = [
            'FIO' => 'Test User',
            'phone_number' => '1234567890',
            'email' => '',
            'login' => 'test_user',
            'password' => 'test_password'
        ];

        $registration = new Registration();
        $result = $registration->processRegistration($formData);

        $this->assertEquals('Заполните email!', $result);
    }



}