<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminClient extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "client";

    protected $fillable = [
        "client_id",
        "name",
        "address",
        "email_address",
        "date_business_started",
        "type_of_business",
        "states",
        "date_of_commencent",
        "contact_person_1",
        "contact_person_2",
        "phone_number_2",
        "phone_number_1",
    ];

    public function branches()
    {
        return $this->belongsTo(Branches::class, "branch_id");
    }

    public function services()
    {
        return $this->belongsTo(Services::class, "service_id");
    }
    public function payroll()
    {
        return $this->hasMany(Services::class, "client_id");
    }
    public function staffs()
    {
        return $this->hasMany(Staffs::class, "client_id");
    }
}
