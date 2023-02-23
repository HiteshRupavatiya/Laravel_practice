<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getPostImage($id){
        $image = Post::find($id)->image;
        return $image;
    }

    public function getUserImage($id){
        $user = User::find($id)->image;
        return $user;
    }
}
