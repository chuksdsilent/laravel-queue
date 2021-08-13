<?php

namespace App\Jobs;

use App\Models\LaraQueues as ModelsLaraQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LaraQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $data = [];
    public $msg = "";
    public function __construct($data, $msg)
    {
        $this->data = $data;
        $this->msg = $msg;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->data as $key => $value){
            echo  $this->msg ;
            ModelsLaraQueue::where("id", $value->id)->update(["msgSent" => 1, "msg" => $this->msg ]);
        }
        
    }
}
