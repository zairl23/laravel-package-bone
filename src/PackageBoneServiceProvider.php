<?php

namespace Ney\PackageBone;

use Route;
use Illuminate\Support\ServiceProvider;

class PackageBoneServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        Route::group(
            ['prefix' => 'task'], 
            function () {
                require __DIR__ . "/../routes/web.php";
            }
        );

    }

    public function register()
    {

    }

    
}
