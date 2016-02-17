<?php

namespace App\Tests\Dashboard;

use App\Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * Test dashboard default route.
     *
     * @return void
     */
    public function testDefaultRoute()
    {
       $this->authenticate();

       $this->visit('/dashboard')
           ->assertResponseStatus(200);
    }
}
