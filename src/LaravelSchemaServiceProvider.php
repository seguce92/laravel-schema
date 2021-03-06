<?php

namespace Thedevsaddam\LaravelSchema;

use Illuminate\Support\ServiceProvider;

class LaravelSchemaServiceProvider extends ServiceProvider
{
    protected $commands = [
        'Thedevsaddam\LaravelSchema\Console\Commands\HelpSchema',
        'Thedevsaddam\LaravelSchema\Console\Commands\ListSchema',
        'Thedevsaddam\LaravelSchema\Console\Commands\QuerySchema',
        'Thedevsaddam\LaravelSchema\Console\Commands\ShowSchema',
        'Thedevsaddam\LaravelSchema\Console\Commands\SimpleSchema',
        'Thedevsaddam\LaravelSchema\Console\Commands\TableSchema',
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //register the commands
        $this->commands($this->commands);
    }
}
