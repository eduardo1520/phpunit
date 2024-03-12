<?php

use App\Login;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase {
    
    private Login $login;

    public function setUp(): void {
        $this->login = new Login();    
    }
    
    public function testShouldLogInWithCredentials() {
        $email = 'email@gmail.com';
        $senha = '123456789';
        
        $this->assertTrue($this->login->logar($email, $senha));
    }

    public function testShouldFailWithInvalidCredentials() {
        $email = 'email@gmail.com';
        $senha = '1234567890';

        
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Error logging in!");
        
        $this->login->logar($email, $senha);
    }

}
