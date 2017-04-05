<?php

namespace Illuminate\Bus;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Bus\Dispatcher as DispatcherContract;
use Illuminate\Contracts\Queue\Factory as QueueFactoryContract;
use Illuminate\Contracts\Bus\QueueingDispatcher as QueueingDispatcherContract;

class PackageBoneServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    // protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    public function boot()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {

    }
}
