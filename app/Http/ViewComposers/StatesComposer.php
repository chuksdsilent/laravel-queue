<?php

namespace App\Http\ViewComposers;

use App\Models\States;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class StatesComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        View::composer("*", function ($view) {
            $states = States::all();
            $view->share("states", $states);
        });
    }
}
