<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaraQueues extends Model
{
    use HasFactory;

    protected $table = "laraqueue";

    protected $guarded = [];
    
}
