<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getTagByPost($id){
        $tags = Post::find($id)->tags;
        return $tags;
    }

    public function getPostByTag($id){
        $post = Tag::find($id)->posts;
        return $post;
    }

    public function getTagByVideo($id){
        $tags = Video::find($id)->tags;
        return $tags;
    }

    public function getVideoByTag($id){
        $video = Tag::find($id)->videos;
        return $video;
    }
}
