<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearAllCaches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-caches';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear config, application, route, viez and other caches at once';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $commands = [
            'config:clear',
            'cache:clear',
            'route:clear',
            'view:clear',
            'optimize:clear',
            //'event:clear',
            //'event:cache',
        ];

        foreach ($commands as $key => $value) {
            # code...

            $this->info("running `{$value}`");
            $this->call($value);
        }

        $this->info('all caches cleared successfully');
        return 0;
    }
}
