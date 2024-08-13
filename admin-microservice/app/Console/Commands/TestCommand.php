<?php

namespace App\Console\Commands;

use App\Http\Controllers\PostController;
use App\Jobs\TestJob;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // TestJob::dispatch();
        $request = new Request([
            'title' => 'first test',
            'image' => 'first image'
        ]);
        (new PostController)->store($request);
    }
}
