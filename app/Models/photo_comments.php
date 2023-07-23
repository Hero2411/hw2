<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo_comments extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'photo_comments';
    protected $fillable = ['user_id', 'comment_text','comment_date', "photo_id"];
}
