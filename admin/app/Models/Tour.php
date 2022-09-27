<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    // use HasFactory;

    protected $fillable = [
        'image', 'tittle', 'duration',
        'group_info', 'destination', 'description',
        'url'
    ];
}
