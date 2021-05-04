<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Like;
use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        $receivedLikes = Like::where('user_id', $user->id)->count();

        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts,
            'receivedLikes' => $receivedLikes
        ]);
    }
}
