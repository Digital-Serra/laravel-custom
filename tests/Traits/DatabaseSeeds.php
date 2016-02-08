<?php

namespace App\Tests\Traits;


trait DatabaseSeeds
{

    /**
     * Run the database seeds
     *
     * @return mixed
     */
    public function runDatabaseSeeds()
    {
        return $this->artisan('db:seed');
    }
}