<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    
    // public function show($postId)
    // {
    //     // Retrieve the post
    //     $post = Post::find($postId);

    //     if (!$post) {
    //         abort(404, 'Post not found');
    //     }

    //     // Retrieve the comments for the post
    //     $comments = $post->comments;

    //     // Pass the post and comments data to the view
    //     return view('comment', ['post' => $post]);
    // }
   
    public function postComment(Request $request)
    {
        // $id contains the post ID
    
        $request->validate([
            'content' => 'required|string|max:255',
        ]);
    
        $user = Auth::user();
    
        // Find the post
        $post = Post::find($request->post_id);
    
        if (!$post) {
            abort(404, 'Post not found');
        }
    
        // Create a new comment with the association to the user and post
        $comment = $post->comments()->create([
            'user_id' => $user->id,
            'content' => $request->input('content'),
        ]);
    
        return redirect()->back()->with('success', 'Comment posted successfully.');
    }
    public function show($postId)
{
    // Retrieve the post
    $post = Post::find($postId);

    if (!$post) {
        abort(404, 'Post not found');
    }

    // Retrieve the comments for the post, ordered by descending created_at
    $comments = $post->comments()->latest('created_at')->get();

    // Pass the post and comments data to the view
    return view('comment', ['post' => $post, 'comments' => $comments]);
}
}