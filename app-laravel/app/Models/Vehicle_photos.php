<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_photos extends Model
{
    protected $table = 'vehicle_photos';
    use HasFactory;
    protected $guarded = ['id'];
}
