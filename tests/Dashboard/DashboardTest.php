<?php

namespace App\Tests\Dashboard;

use App\Tests\AbstractTestCase;
use App\Tests\Traits\Authenticate;

class DashboardTest extends AbstractTestCase
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
