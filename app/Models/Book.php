<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Book extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [`title`, `isbn`, `genre`, `copies_available`, `author_id`, `created_at`, `updated_at`];
    protected $dates = ['deleted_at'];
}
