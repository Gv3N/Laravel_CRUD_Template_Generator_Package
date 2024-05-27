<?php

namespace Gv3N\LaravelCrudTemplateGenerator;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Helpers
{
    public static function generateController($name)
    {
        $controllerTemplate = File::get(__DIR__ . '/Http/Controllers/Controller.stub');
        $controllerTemplate = str_replace('{{modelName}}', $name, $controllerTemplate);

        $lowercaseName = strtolower($name);
        $controllerTemplate = str_replace('{{lowerModelName}}', $lowercaseName, $controllerTemplate);

        File::put(app_path("Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }

    public static function generateModel($name)
    {
        $modelTemplate = File::get(__DIR__ . '/Models/Model.stub');
        $modelTemplate = str_replace('{{modelName}}', $name, $modelTemplate);
        File::put(app_path("Models/{$name}.php"), $modelTemplate);
    }

    public static function generateViews($name)
    {
        $views = ['index', 'create', 'edit', 'show'];
        foreach ($views as $view) {
            $viewTemplate = File::get(__DIR__ . "/resources/views/{$view}.stub");
            $viewTemplate = str_replace('{{modelName}}', $name, $viewTemplate);
            File::ensureDirectoryExists(resource_path("views/{$name}"));
            File::put(resource_path("views/{$name}/{$view}.blade.php"), $viewTemplate);
        }
    }

    public static function generateMigration($name)
    {
        // Migration generation logic
    }

    public static function appendRoute($name)
    {
        $route = "Route::resource('" . Str::plural(strtolower($name)) . "', '{$name}Controller');";
        File::append(base_path('routes/web.php'), "\n" . $route);
    }
}
