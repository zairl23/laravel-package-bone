<?php

namespace Illuminate\Bus;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Bus\Dispatcher as DispatcherContract;
use Illuminate\Contracts\Queue\Factory as QueueFactoryContract;
use Illuminate\Contracts\Bus\QueueingDispatcher as QueueingDispatcherContract;

class PackageBoneServiceProvider extends ServiceProvider
{
    
    protected $commands = [];
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
        
        if (isset($this->commands[0) {
            $this->registerCommands($this->commands);
        }
            
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {

    }
    
                                  
     /**
     * Register the schedule tasks
     *
     * @return void
     */
     protected function registerCommands() 
     {
        $this->commands($this->commands);

//         $this->app->booted(function () {
//           $schedule = $this->app->make(Schedule::class);
//           $schedule->command('advert:check')
//             ->daily()
//             ->appendOutputTo(storage_path('logs/jobs-advert-check-' . date('Y-m-d') . '.log'));
//           $schedule->command('recommend:check')->withoutOverlapping()
//             ->daily()
//             ->appendOutputTo(storage_path('logs/jobs-recommend-check-' . date('Y-m-d') . '.log'));
//         });   
     }
}
