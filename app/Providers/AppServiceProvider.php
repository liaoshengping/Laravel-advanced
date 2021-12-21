<?php

namespace App\Providers;

use App\Contracts\Express;
use App\Http\Controllers\Nut;
use App\Services\express\Shunfeng;
use App\Services\express\Yuantong;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->when('App\Http\Controllers\Fruit')
            ->needs(Express::class)
            ->give(Shunfeng::class);

        $this->app->when('App\Http\Controllers\Nut')
            ->needs(Express::class)
            ->give(Yuantong::class);

        $this->app->extend('App\Http\Controllers\Nut', function ($service, $app) {

            $service->data = 'hello extend';
            return $service;

        });

        $this->app->resolving('setDefaultConnection',function ($db,$app){
            $db->setDefaultConnection('ConnectionName');
        });

        $this->app->resolving('App\Http\Controllers\Nut', function ($nut, $app) {
            /**
             * @var Nut $nut
             */
            $nut->data = 'hello word';

        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
