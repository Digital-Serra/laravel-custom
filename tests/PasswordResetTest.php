<?php

namespace App\Tests;

use App\Entities\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;

class PasswordResetTest extends TestCase
{
    /**
     * Test password reset route with nonexistent user
     *
     * @return void
     */
    public function testPasswordResetRouteWithNonexistentUser()
    {
        $this->visit('/password/email')
            ->type('test@example.com', 'email')
            ->press('Redefinir')
            ->seePageIs('/password/email')
            ->see('Não conseguimos encontrar nenhum usuário com o endereço de e-mail especificado.');
    }

    /**
     * Test password reset token route with nonexistent token
     *
     * @return void
     */
    public function testPasswordResetTokenRouteWithNonExistentToken()
    {
        $token = md5(uniqid("this is a test token"));

        $this->visit('/password/reset/'.$token)
            ->type('email@notexist.com', 'email')
            ->type('12345678', 'password')
            ->type('12345678', 'password_confirmation')
            ->press('Redefinir credenciais')
            ->seePageIs('/password/reset/'.$token)
            ->see('Não conseguimos encontrar nenhum usuário com o endereço de e-mail especificado.');
    }


    /**
     * Test password reset token route with existent user
     *
     * @return void
     */
    public function testPasswordResetTokenRouteWithExistentUser()
    {
        $this->insertTestUser('test','test@test.com','12345678');

        $token = md5(uniqid("this is a test token"));

        $this->visit('/password/reset/'.$token)
            ->type('test@test.com', 'email')
            ->type('12345678', 'password')
            ->type('12345678', 'password_confirmation')
            ->press('Redefinir credenciais')
            ->seePageIs('/password/reset/'.$token)
            ->see('Este código de recuperação de senha é inválido.');
    }
}
