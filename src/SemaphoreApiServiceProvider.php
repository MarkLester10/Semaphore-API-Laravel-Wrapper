<?php

namespace MarkLesterMorta\Semaphore;

use Illuminate\Support\ServiceProvider;

class SemaphoreApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // copy config file to laravel root config folder

        $this->publishes([
            __DIR__ . '/../config/semaphore.php' => config_path('semaphore.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton(SemaphoreApi::class, function () {
            return new SemaphoreApi();
        });
    }
}