<?php

namespace App\Http\Controllers;

use App\Post;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller {

    /**
     * Display a listing of the post.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // Create a variable and store all the blog posts in it from the database.
        $posts = Post::orderBy('id', 'desc')->paginate(4);

        // Return a view and pass in the above variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // Validate the data.
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body' => 'required',
        ));

        // Store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();

        // Success message just for one request.
        Session::flash('success', 'The post was successfully save!');

        // Redirect to the page of the last created post.
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        // Find the post and save as a var.
        $post = Post::find($id);

        // return the view and pass in the var we previously created.
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        //Check if the slug has been updated or not.
        $post = Post::find($id);
        if ($request->input('slug') == $post->slug) {

            // Validate the data.
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required',
            ));
        } else {

            // Validate the data.
            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body' => 'required',
            ));
        }

        // Save the data to the database.
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->save();

        //Set flash data with success message.
        Session::flash('success', 'The post was successfully saved!');

        // Redirect with flash data to posts.show.
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        // Find the post to delete.
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'The post was successfully deleted!');
        return redirect()->route('posts.index');
    }
}
