<?php

namespace Aref\Cms\Providers;

use Aref\Cms\SpClass;
use Illuminate\Support\ServiceProvider;
use Log;

class ArefServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton('ArefPack', function () {
            return new SpClass();
        });
    }
    // public function boot()
    // {
    //     $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    // }

    public function boot()
    {
        //Log::info(__DIR__.'/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../Views', 'cmspackage');
    }
}

