<?php

namespace App\Tests\FrontPages;

use App\Tests\AbstractTestCase;

class AppTest extends AbstractTestCase
{
    /**
     * Test app base route.
     *
     * @return void
     */
    public function testBaseRoute()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
}
