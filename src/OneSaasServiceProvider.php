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