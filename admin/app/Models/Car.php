<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table="car";

    protected $fillable = [
        'title', 'image', 'carname',
        'url', 'specs', 'description'
    ];
}
