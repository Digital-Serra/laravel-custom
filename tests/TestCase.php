<?php

namespace App\Tests;

use App\Entities\User;
use App\Tests\Traits\DatabaseSeeds;
use App\Tests\Traits\InteractsWithUser;
use App\Tests\Traits\InteractsWithUsers;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTest;
use Illuminate\Foundation\Console\Kernel;

abstract class TestCase extends BaseTest
{
    use DatabaseMigrations, DatabaseTransactions, DatabaseSeeds, InteractsWithUser;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        putenv('DB_CONNECTION=testing');

        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
