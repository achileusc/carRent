<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_detail extends Model
{
    use HasFactory;
    protected $fillable = ['merek',
'model',
'no_plat',
'tarif'];
}
