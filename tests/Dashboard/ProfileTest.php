<?php

namespace App\Tests\Dashboard;

use App\Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * Test dashboard default route.
     *
     * @return void
     */
    public function testDefaultRoute()
    {
       $this->authenticate();

       $this->visit('/dashboard/profile/edit')
           ->see('Editar Perfil');
    }
}
