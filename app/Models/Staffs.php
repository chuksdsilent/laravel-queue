<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staffs extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "staffs";

    protected $guarded = [];

    public function branches()
    {
        return $this->belongsTo(Branches::class,  "branch_id", "id");
    }
    public function states()
    {
        return $this->belongsTo(States::class, "state_of_employment", "id");
    }
    public function adminclients()
    {
        return $this->belongsTo(AdminClient::class, "client_id", "id");
    }
    public function services()
    {
        return $this->belongsTo(Services::class, "service_id", "id");
    }
}
