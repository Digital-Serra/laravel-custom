<?php

namespace App\Tests\Dashboard;

use App\Entities\User;
use App\Tests\TestCase;
use App\Tests\Traits\Authenticate;

class ProfileTest extends TestCase
{
    use Authenticate;

    /**
     * Test profile edit route.
     *
     * @return void
     */
    public function testProfileEditRoute()
    {
       $this->visit('/dashboard')
           ->click('Editar Perfil')
           ->seePageIs('/dashboard/profile/edit')
           ->see('Editar Perfil')
           ->assertResponseStatus(200);
    }

    /**
     * Test can update a profile.
     *
     * @return void
     */
    public function testCanUpdateProfile()
    {
       $this->visit('/dashboard/profile/edit')
           ->type('ThisIsATest','name')
           ->type('this@isatest.com','email')
           ->type('12345678','old_password')
           ->type('87654321','password')
           ->type('87654321','password_confirmation')
           ->press('Atualizar perfil')
           ->seePageIs('/dashboard/profile/edit')
           ->assertResponseStatus(200);

        $this->assertEquals('ThisIsATest', User::where('name','ThisIsATest')->first()->name);

    }
}
