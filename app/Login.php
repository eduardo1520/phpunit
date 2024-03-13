<?php 

namespace App;

use Exception;

class Login 
{

    public function logar(string $email, string $password): bool {
        if ($email === 'email@gmail.com' && $password === '123456789') {
            return true;
        }

        throw new Exception("Error logging in!");
    }
}