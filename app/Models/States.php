<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    public function branches()
    {
        return $this->hasMany(Branches::class);
    }
    public function staffs()
    {
        return $this->hasMany(Staffs::class, "state_of_employment");
    }
}
