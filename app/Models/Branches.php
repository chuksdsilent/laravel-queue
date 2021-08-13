<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function states()
    {
        return $this->belongsTo(States::class);
    }

    public function clients()
    {
        return $this->hasMany(AdminClient::class, "c_id");
    }

    public function payroll()
    {
        return $this->hasMany(payroll::class, "payroll_id");
    }
    public function staffs()
    {
        return $this->hasMany(Staffs::class, "branch_id", "id");
    }
}
