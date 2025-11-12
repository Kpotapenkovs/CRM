<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vechiles extends Model
{
    protected $fillable = [
        'id',
        'plate_no',
        'country',
        'make',
        'model',
        'vin'
    ];
}
