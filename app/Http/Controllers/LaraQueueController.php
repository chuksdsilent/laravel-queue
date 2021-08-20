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
        return redirect()->back();
    }

    public function getLara()
    {

        $laras = LaraQueues::where("msgSent", 1)->get();

        $container = "";
        foreach($laras as $key => $lara){
            
            $container .= "<tr><td>". $lara->id ."</td><td>".$lara->msg."</td><td>". $lara->phone ."</td><td>". $lara->created_at ."</td></tr>";
        }

        return $container;
    }
}
