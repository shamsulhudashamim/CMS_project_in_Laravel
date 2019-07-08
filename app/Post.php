<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	 use SoftDeletes;
    protected $fillable = [
    	'title','description','content','image','category_id','published_at','user_id'
    ];

    /**
    *delete post image from storage
    *@return void


    */

    public function deleteImage(){
    	Storage::delete($this->image);
    }
    public function category(){
       // or  return $this->belongsTo(Category::class);
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

/**
 * check if post has tags
 * @return bool
 */

    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());

    }
}
