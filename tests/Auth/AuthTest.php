<?php

namespace App\Tests\Auth;

use App\Tests\AbstractTestCase;

class AuthTest extends AbstractTestCase
{
    /**
     * Test app login route.
     *
     * @return void
     */
    public function testLoginRoute()
    {
        $this->visit('/login')
            ->see('Faça Login para acessar o Sistema');
    }

    /**
     * Test app register route.
     *
     * @return void
     */
    public function testRegisterRoute()
    {
        $this->visit('/register')
            ->see('Registre-se');
    }

    /**
     * Test can register a new user.
     *
     * @return void
     */
    public function testCanRegisterANewUser()
    {
        $this->visit('/register')
            ->type('Example', 'name')
            ->type('example@example.com', 'email')
            ->type('12345678','password')
            ->type('12345678','password_confirmation')
            ->press('Registrar-se')
            ->seePageIs('/dashboard')
            ->assertResponseStatus(200);
    }

    /**
     * Test can login an user.
     *
     * @return void
     */
    public function testCanLoginUser()
    {
        $this->visit('/login')
            ->type('test@test.com', 'email')
            ->type('12345678','password')
            ->check('remember')
            ->press('Entrar')
            ->seePageIs('/dashboard')
            ->assertResponseStatus(200);
    }
}
