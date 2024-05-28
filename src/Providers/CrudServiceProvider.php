<?php

namespace Gv3N\LaravelCrudTemplateGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use Gv3N\LaravelCrudTemplateGenerator\Console\Commands\MakeCrudCommand;

class CrudServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeCrudCommand::class,
        ]);
    }

    public function boot()
    {
        // Publish configuration if needed
        $this->publishes([
            __DIR__.'/../../config/crud.php' => config_path('crud.php'),
        ]);
    }
}
