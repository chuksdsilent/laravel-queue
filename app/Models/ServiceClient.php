<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceClient extends Model
{

    protected $fillable = [
        "payroll_id",
        "client_id"
    ];

    protected $table = "service_clients";
    
    use HasFactory;
}
