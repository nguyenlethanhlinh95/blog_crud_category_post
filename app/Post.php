<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    //
    use softDeletes;
    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'category_id', 'featured', 'slug'];

    protected $dates = ['deleted_at'];

    public function Category()
    {
        return $this->belongsTo('App\Category','category_id', 'id');
    }

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }
}
