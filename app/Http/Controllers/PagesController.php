<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller
{

    // Home page.
    public function getIndex() {

        // Get the last 10 created posts.
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

        // Redirect to the welcome view.
        return view('pages.welcome')->withPosts($posts);
    }

    // About me page.
    public function getAbout() {

        $first = 'John';
        $last = 'Verginis';
        $fullname = $first . " " . $last;
        $email = "giannisverg@gmail.com";
        $data = array();
        $data = array('fullname' => $fullname, 'email' => $email);

        return view('pages.about')->withData($data);
    }

    // Contact me page
    public function getContact() {
        return view('pages.contact');
    }
}