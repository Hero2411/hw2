<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $fillable = [
        'title',
        'cover_filename',
        'location',
        'shoot_date',
        'subject',
        'description',
    ];
}
