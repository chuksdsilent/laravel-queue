<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "payroll_id",
        "cost_of_service",
        "basic",
        "transport",
        "housing",
        "other_insurance",
        "other_allowance",
        "nhf",
        "nsitf",
        "group_life",
        "nihs",
        "uniform",
        "consumables",
        "service_charge",
        "vat"
    ];

    protected $table = "payrolls";


    public function branches()
    {
        return $this->belongsTo(Branches::class, "branch_id");
    }

    public function services()
    {
        return $this->belongsTo(Services::class, "service_id",);
    }

    public function clients()
    {
        return $this->belongsTo(Services::class, "id",);
    }
}
