<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function client()
    {
        return $this->hasMany(AdminClient::class, "id", "service_id");
    }

    public function services()
    {
        return $this->hasMany(Services::class, "id", "service_id");
    }
}
