<?php


namespace Yuiirax\Gizmo\Eloquent;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class GizmoEloquentServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/package.php' => config_path('package.php')
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__.'/../config/gizmo_eloquent.php';

        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpIncludeInspection */
        Config::push('database.connections', require $configPath);
    }
}
