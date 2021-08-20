<?php

namespace App\Http\Controllers;

use App\Jobs\LaraQueue;
use App\Models\LaraQueues;
use Illuminate\Http\Request;

class LaraQueueController extends Controller
{
    public function lara()
    {
        
        $this->dispatch(new LaraQueue(LaraQueues::all(), request()->get("msg")));
        $laras = LaraQueues::where("msgSent", 1)->get();
        return view("result")->with("laras", $laras);
    }

    public function getLara(){
        return 343;
    }

}
