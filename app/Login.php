<?php 

namespace App;

use Exception;

class Login 
{

    public function logar(string $email, string $senha): bool {
        if ($email === 'email@gmail.com' && $senha === '123456789') {
            return true;
        }

        throw new Exception("Error logging in!");
    }
}