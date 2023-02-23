<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getAllPostComments($id){
        $comments = Post::find($id)->comments;
        return $comments;
    }

    public function getAllVideoComments($id){
        $comments = Video::find($id)->comments;
        return $comments;
    }
}
