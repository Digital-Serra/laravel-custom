<?php

namespace App\Tests;

use App\Entities\User;
use App\Tests\Traits\DatabaseSeeds;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTest;
use Illuminate\Foundation\Console\Kernel;

class TestCase extends BaseTest
{
    use DatabaseMigrations, DatabaseSeeds, DatabaseTransactions;

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
        putenv('DB_CONNECTION=sqlite');

        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * Create a new test user
     *
     * @param $name
     * @param $email
     * @param $password
     * @return bool
     */
    public function insertTestUser($name, $email, $password){
        if(count(User::all()) == 0){
            User::create(['name'=>$name,'email'=>$email,'password'=>bcrypt($password),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        }

        return true;
    }
}
