<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\DemoSeeder;

class MoreSeeds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bulk:seed {total}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Call the demo seeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $total = (int)$this->argument('total');

        $seeder_count = 1000;
        $total_runs = ceil($total / $seeder_count);

        for ($i = 1; $i <= $total_runs; $i++) {
            $this->info("Performing run {$i} of {$total_runs}.");

            //
            $this->call(DemoSeeder::class);
            $this->info("{($i*$seeder_count)} records created");
        }
    }
}
