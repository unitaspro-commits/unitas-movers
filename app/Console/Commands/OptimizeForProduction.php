<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OptimizeForProduction extends Command
{
    protected $signature = 'app:optimize';
    protected $description = 'Run all production optimization caches (route, config, view, event)';

    public function handle(): int
    {
        $commands = [
            'config:cache' => 'Configuration',
            'route:cache' => 'Routes',
            'view:cache' => 'Views',
            'event:cache' => 'Events',
        ];

        foreach ($commands as $command => $label) {
            $this->info("Caching {$label}...");
            $this->call($command);
        }

        $this->newLine();
        $this->info('All production caches created successfully.');

        return self::SUCCESS;
    }
}
