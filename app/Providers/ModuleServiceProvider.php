<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $modelClassName = class_basename($modelName);
            $namespace = Str::before($modelName, "\\$modelClassName");
            return "$namespace\\$modelClassName\\Tests\\$modelClassName" . 'Factory';
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Can also use (**) wildcard if you have subfolders
        foreach (glob(base_path('app/Modules/*')) ?: [] as $dir) {
            $modelClassName = class_basename($dir);
            $path = Str::before($dir, "\\$modelClassName");
            $moduleRouteFile = "$path/$modelClassName" . 'Routes.php';

            if (!file_exists($moduleRouteFile)) continue;

            $this->loadRoutesFrom($moduleRouteFile);
        }
    }
}
