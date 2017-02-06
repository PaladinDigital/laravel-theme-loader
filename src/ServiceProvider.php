<?php namespace PaladinDigital\LaravelThemes;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->views();
    }

    private function views()
    {
        $this->loadViewsFrom(resource_path('themes'), 'themes');
    }

    public function register()
    {
        //
    }

    public function provides()
    {
        return [];
    }
}
