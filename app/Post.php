<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'title', 'description' , 'content', 'image', 'pubished_at' 
    ];
}
