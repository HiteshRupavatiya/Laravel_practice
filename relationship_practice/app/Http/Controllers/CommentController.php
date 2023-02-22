<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getPostOfComment($id)
    {
        $post = Comment::find($id)->post;
        return $post;
    }

    public function getCommentOfPost($id)
    {
        $comments = Post::find($id)->comments;
        return $comments;
    }
}
