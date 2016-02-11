<?php

namespace App\Tests;

use App\Entities\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * Test password reset token route with nonexistent user
     *
     * @return void
     */
    public function testPasswordResetTokenRouteWithNonexistentUser()
    {
        $token = md5(uniqid("this is a test token"));

        $this->call('GET','/password/reset/'.$token);

        $this->assertResponseStatus(404);
    }
}
