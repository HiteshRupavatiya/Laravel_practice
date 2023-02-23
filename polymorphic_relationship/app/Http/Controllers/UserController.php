<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getPostImage($id)
    {
        // $image = Post::find($id)->image; // getting one post image
        // $image = Post::find($id)->latestPostImage; // getting one post latest image
        $image = Post::find($id)->oldestPostImage; // getting one post oldest image
        return $image;
    }

    public function getUserImage($id)
    {
        // $user = User::find($id)->image; // getting one user image
        // $user = User::find($id)->latestUserImage; // getting one user latest image
        $user = User::find($id)->latestUserImage; // getting one user oldest image        
        return $user;
    }
}
