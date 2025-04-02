<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Demo;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $output = new ConsoleOutput();
        $total = 1000;
        $progressBar = new ProgressBar($output, $total);

        Demo::factory()->count(1000)->create();
        for ($i = 0; $i < $total; $i++) {
            Demo::factory()->create();
            $progressBar->advance();
        }
        $progressBar->finish();
    }
}
