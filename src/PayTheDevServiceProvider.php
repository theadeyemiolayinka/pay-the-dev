<?php

namespace TheAdeyemiOlayinka\PayTheDev;

use Illuminate\Support\ServiceProvider;

class PayTheDevServiceProvider extends ServiceProvider{
        
    /**
     * Boot the provider
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'PayTheDev');
        $this->addPublishes();
        $this->addCommands();

        app('router')->pushMiddlewareToGroup('web', \TheAdeyemiOlayinka\PayTheDev\Http\Middleware\PTTWebMiddleware::class);
        app('router')->pushMiddlewareToGroup('api', \TheAdeyemiOlayinka\PayTheDev\Http\Middleware\PTTAPIMiddleware::class);
    }

    /**
     * Register publishable assets
     *
     * @return void
     */
    public function addPublishes()
    {
        $this->publishes([
            __DIR__.'/../config/pay-the-dev.php' => config_path('pay-the-dev.php'),
        ], 'pay-the-dev.config');
    }

    /**
     * Add commands
     *
     * @return void
     */
    protected function addCommands()
    {
        // Console only commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\InstallCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/pay-the-dev.php', 'pay-the-dev');
    }
}

?>