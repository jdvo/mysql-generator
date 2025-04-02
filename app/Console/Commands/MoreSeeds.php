<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\DemoSeeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

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

        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, $total);

        $this->info("Creating {$total} new records.");

        for ($i = 1; $i <= $total; $i++) {
            $this->call(DemoSeeder::class);
            $progressBar->advance();
        }

        $progressBar->finish();
    }
}
