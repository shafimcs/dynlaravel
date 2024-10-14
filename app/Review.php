<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'blog_id', 'review', 'rating',
    ];
    protected $table='tbl_review';
}
