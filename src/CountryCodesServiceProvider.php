<?php

namespace Jnaxo\CountryCodes;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Jnaxo\CountryCodes\CountryStore;

class CountryCodesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig($this->app);
        $this->setupMigrations($this->app);
        $this->setupSeeds($this->app);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton('CountryStore', function ()
      {
          return new CountryStore();
      });
    }

    /**
     * Setup the config.
     *
     * @param \Illuminate\Contracts\Container\Container $app
     *
     * @return void
     */
    protected function setupRoutes(Application $app)
    {
        $source = realpath(__DIR__.'/../config/routes.php');
        if ($app instanceof LaravelApplication && $app->runningInConsole()) {
            $this->publishes([$source => app_path('Http/routes.php')]);
        }
        $this->mergeConfigFrom($source, 'routes');
    }

    /**
     * Setup the migrations.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function setupMigrations(Application $app)
    {
        $source = realpath(__DIR__.'/../database/migrations/');

        if ($app instanceof LaravelApplication && $app->runningInConsole()) {
            $this->publishes([$source => database_path('migrations')], 'migrations');
        }
    }

    /**
     * Setup the seeds.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function setupSeeds(Application $app)
    {
        $source = realpath(__DIR__.'/../database/seeds/');

        if ($app instanceof LaravelApplication && $app->runningInConsole()) {
            $this->publishes([$source => database_path('seeds')], 'seeds');
        }
    }
}
