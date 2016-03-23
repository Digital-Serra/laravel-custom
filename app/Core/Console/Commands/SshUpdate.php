<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use phpseclib\Net\SSH1;

class SshUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ssh:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the project with git on remote server.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \SSH::run(['cd public_html','git pull origin master']);
    }
}
