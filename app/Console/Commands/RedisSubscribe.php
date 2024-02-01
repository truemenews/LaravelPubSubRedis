<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class RedisSubscribe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:subscribe';

    protected $description = 'Subscribe to a Redis channel';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Redis::subscribe(['trueme-channel'], 
         function (string $message) {
                echo $message;
        });
    }
}
