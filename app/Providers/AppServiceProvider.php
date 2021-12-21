<?php

namespace App\Providers;

use App\Contracts\Express;
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
