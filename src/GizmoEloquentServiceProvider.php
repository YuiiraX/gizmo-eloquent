<?php


namespace YuiiraX\Gizmo\Eloquent;


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
            __DIR__.'/../config/gizmo-eloquent.php' => config_path('gizmo-eloquent.php')
        ], 'gizmo-eloquent-config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/gizmo-eloquent.php',
            'database.connections'
        );
    }
}
