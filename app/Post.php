<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\User;

class Post extends Model
{
    //
    use softDeletes;

    protected $dates = [
        'published_at'
    ];
    protected $fillable = [
        'title', 'description' , 'content', 'image', 'pubished_at', 'category_id', 'user_id'
    ];




    public function deleteImage() {
        Storage::delete($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopePublished($query) {
        return $query->where('published_at', '<=', now());
    }


    public function scopeSearched($query) {
        $search = request()->query('search');


        if ($search == '')
        {
            return $query;
        }


        if (!$search) {
            return $query->published();
        }

        return $query->where('title', 'LIKE', "%{$search}%");
    }

}
