<?php

namespace App\Providers;

use App\Http\ViewComposers\StatesComposer;
use App\Models\States;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class StatesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
