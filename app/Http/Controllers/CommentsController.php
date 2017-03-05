<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Session;

class CommentsController extends Controller {

    public function __construct() {

        $this->middleware('auth', array('except' => 'store'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id) {

        // Validation to store a comment.
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|min:5|max:2000',
        ));

        // Find the post that this comment belongs to.
        $post = Post::find($post_id);

        // Create the comment.
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->approved = TRUE;
        $comment->post()->associate($post);
        $comment->save();

        // Message for success store of the comment.
        Session::flash('success', 'Comment was added!');

        // Redirect to the post's page.
        return redirect()->route('blog.single', array($post->slug));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        // Bring the comment.
        $comment = Comment::find($id);

        // Return the view.
        return view('comments.edit')->withComment($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        // Bring the comment.
        $comment = Comment::find($id);

        $this->validate($request, array('comment' => 'required'));

        // Save the updated comment.
        $comment->comment = $request->comment;
        $comment->save();

        // Message for success store of the comment.
        Session::flash('success', 'Comment updated');

        // Redirect to the post's page.
        return redirect()->route('posts.show', $comment->post->id);
    }

    /**
     * Function that delete a comment
     *
     * @param $id
     * @return mixed
     */
    public function delete($id) {

        // Bring the comment to delete.
        $comment = Comment::find($id);

        // Return the deletion view.
        return view('comments.delete')->withComment($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        // Delete a comment.
        $comment = Comment::find($id);
        $post_id = $comment->post->id;
        $comment->delete();

        // Success message if a comment deleted successfully.
        Session::flash('success', 'Delete comment');

        // Redirect to post's page.
        return redirect()->route('posts.show', $post_id);
    }
}
