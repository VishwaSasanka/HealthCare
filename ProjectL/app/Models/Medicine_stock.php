<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine_stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'Med_No','Med_Name','Dosage','Consumption_time','Unit_Price','Exp_Date','Manu_Date','Quantity'
    ];
}
