<?php

namespace App\Tests\Auth;

use App\Tests\AbstractTestCase;

class PasswordResetTest extends AbstractTestCase
{
    /**
     * Test password reset route with nonexistent user
     *
     * @return void
     */
    public function testPasswordResetRouteWithNonexistentUser()
    {
        $this->visit('/password/email')
            ->type('blablabla@domain.com', 'email')
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

        $this->call('GET','/password/reset/'.$token);

        $this->assertResponseStatus(404);
    }
}
