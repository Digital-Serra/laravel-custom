<?php

namespace App\Tests\Dashboard;

use App\Entities\User;
use App\Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * Test profile edit route.
     *
     * @return void
     */
    public function testProfileEditRoute()
    {
       $this->authenticate();

       $this->visit('/dashboard/profile/edit')
           ->see('Editar Perfil');
    }

    /**
     * Test can update a profile.
     *
     * @return void
     */
    public function testCanUpdateProfile()
    {
       $this->authenticate();

       $this->visit('/dashboard/profile/edit')
           ->type('ThisIsATest','name')
           ->type('this@isatest.com','email')
           ->type('12345678','old_password')
           ->type('87654321','password')
           ->type('87654321','password_confirmation')
           ->press('Atualizar perfil')
           ->seePageIs('/dashboard/profile/edit');

        $this->assertEquals('ThisIsATest', User::where('name','ThisIsATest')->first()->name);

    }
}
