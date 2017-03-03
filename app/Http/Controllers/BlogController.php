<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

/**
 * Class BlogController
 * @package App\Http\Controllers
 */
class BlogController extends Controller {
    public function getSingle($slug) {

        // Fetch from DB.
        $post = Post::where('slug', '=', $slug)->first();

        // Return the view.
        return view('blog.single')->withPost($post);
    }
}
