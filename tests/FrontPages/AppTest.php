<?php

namespace App\Tests\FrontPages;

use App\Entities\User;
use App\Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;

class AppTest extends TestCase
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
