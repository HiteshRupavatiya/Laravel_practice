<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

    public function latestPostImage(){
        return $this->morphOne(Image::class,'imageable')->latestOfMany();
    }

    public function oldestPostImage(){
        return $this->morphOne(Image::class,'imageable')->oldestOfMany();
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
