<?php

namespace Markevans\OnesaasLaravelSdk;

use Illuminate\Support\ServiceProvider;

class OneSaasServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot(): void
    {
        // Publish config file
        $this->publishes([
            __DIR__.'/../config/onesaas.php' => $this->app->configPath('onesaas.php')
        ], 'onesaas-php-sdk');

        // Register routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\TestLinkCommand::class,
            ]);
        }
    }
}