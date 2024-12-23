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

        $seeder = 10000;
        $total_runs = ceil($total / $seeder);

        for ($i = 1; $i <= $total_runs; $i++) {
            $this->info("Performing run {$i} of {$total_runs}.");

            $seeder = new DemoSeeder;
            $this->call([
                $seeder->run()
            ]);
        }
    }
}
