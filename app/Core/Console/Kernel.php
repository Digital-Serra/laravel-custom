<?php

namespace App\Core\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Core\Console\Commands\Inspire::class,
        \App\Core\Console\Commands\Ssh\SshPull::class,
        \App\Core\Console\Commands\Ssh\SshRun::class,
        \App\Core\Console\Commands\Docker\DockerUpCommand::class,
        \App\Core\Console\Commands\Docker\DockerDownCommand::class,
        \App\Core\Console\Commands\Docker\DockerRestartCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();
    }
}
