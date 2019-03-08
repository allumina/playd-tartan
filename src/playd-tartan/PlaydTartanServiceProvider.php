<?php

namespace Allumina\Playd\Themes\Tartan;

use Illuminate\Support\ServiceProvider;

class PlaydTartanServiceProvider extends ServiceProvider
{
    /**
     * This will be used to register config & view in
     * your package namespace.
     *
     * --> Replace with your package name <--
     *
     * @var  string
     */
    protected $packageName = 'playd-tartan';

    /**
     * A list of artisan commands for your package
     *
     * @var array
     */
    protected $commands = [
        // FooCommand::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register translations
        $this->loadTranslationsFrom(__DIR__ . '/../lang', $this->packageName);
        $this->publishes([
            __DIR__ . '/../lang' => resource_path('lang/vendor/' . $this->packageName),
        ]);

        // Publish your config
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path($this->packageName . '.php'),
        ], 'config');

        // Register your asset's publisher
        $this->publishes([
            __DIR__.'/../resources/dist' => public_path('themes/'.$this->packageName),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/themes/' . $this->packageName)
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php', $this->packageName
        );

    }

}
