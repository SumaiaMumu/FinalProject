<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'brand',
        'model',
        'year',
        'color',
        'cc',
        'power',
        'torque',
        'odo',
        'number',
        'description',
        'rent_per_hour'
        
    ];
}
