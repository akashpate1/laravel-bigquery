<?php

namespace Akash\Laravel\BigQuery;

use Illuminate\Support\ServiceProvider;

class LaravelBigQueryServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/laravel_big_query.php' => config_path('laravel_big_query.php'),
        ], 'laravel-big-query-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel_big_query.php',
            'laravel_big_query'
        );
    }
}