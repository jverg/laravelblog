<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model {

    /**
     * One post may have many comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments() {
        return $this->hasMany('App\Comment');
    }

    /**
     * Counter for how many posts has each user.
     *
     * @return \Illuminate\Http\Response
     */
//    public function countUserPosts() {
//
//        // Brings the user's id.
//        $user = Auth::id();
//
//        // Brings the current user's posts.
//        $posts = Post::where('author', $user)->count();
//
//        return $posts;
//    }
}