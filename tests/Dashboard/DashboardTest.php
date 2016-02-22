<?php

namespace App\Tests\Dashboard;

use App\Tests\AbstractTestCase;
use App\Tests\Traits\AuthenticateUser;

class DashboardTest extends AbstractTestCase
{
    use AuthenticateUser;

    /**
     * Test dashboard default route.
     *
     * @return void
     */
    public function testDefaultRoute()
    {
        $this->visit('/dashboard')
           ->seePageIs('/dashboard')
           ->assertResponseStatus(200);
    }
}
