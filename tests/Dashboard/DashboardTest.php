<?php

namespace App\Tests\Dashboard;

use App\Tests\TestCase;
use App\Tests\Traits\Authenticate;

class DashboardTest extends TestCase
{
    use Authenticate;

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
