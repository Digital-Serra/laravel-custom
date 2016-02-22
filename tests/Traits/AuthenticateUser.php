<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace App\Tests\Traits;


use App\Entities\User;
use Illuminate\Support\Facades\Auth;

trait AuthenticateUser
{
    /**
     * Authenticate a user
     *
     * @before
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function authenticate($email = 'test@test.com', $password = '12345678'){
        Auth::attempt(['email' => $email, 'password' => $password]);

        return true;
    }
}