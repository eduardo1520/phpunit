<?php

use App\Login;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase {
    
    private Login $login;

    public function setUp(): void {
        $this->login = new Login();    
    }
    
    public function testShouldLogInWithCredentials() {
        $email = 'email@gmail.com';
        $password = '123456789';
        
        $this->assertTrue($this->login->logar($email, $password));
    }

    #[DataProvider("accessAttemptProvider")]
    public function testShouldFailWithInvalidCredentials(string $email, string $password) {

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Error logging in!");
        
        $this->login->logar($email, $password);

    }

    public static function accessAttemptProvider(): array {
        return [
            'fields empty'         => ['',''],
            'field email empty'    => ['','123456789'],
            'field password empty' => ['email@gmail.com',''],
            'fields invalid'       => ['torpedo@gmail.com','124578'],
        ];
    }

}
