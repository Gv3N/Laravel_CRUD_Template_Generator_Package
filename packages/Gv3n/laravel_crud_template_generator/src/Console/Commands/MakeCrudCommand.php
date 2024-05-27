<?php

namespace Gv3N\LaravelCrudTemplateGenerator\Console\Commands;

use Illuminate\Console\Command;
use Gv3N\LaravelCrudTemplateGenerator\Helpers;

class MakeCrudCommand extends Command
{
    protected $signature = 'make:crud {name}';
    protected $description = 'Generate CRUD operations for a given entity';

    public function handle()
    {
        $name = $this->argument('name');
        Helpers::generateController($name);
        Helpers::generateModel($name);
        Helpers::generateViews($name);
        Helpers::generateMigration($name);
        Helpers::appendRoute($name);
        $this->info('CRUD for ' . $name . ' created successfully.');
    }
}
