<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Checktype;
  
class AdminController extends Controller
{
    public function posts()
    {

        // Fetch and display a list of posts
        $posts = Post::latest()->get();
        // dd($posts);
        return view('admin', ['posts' => $posts]);
    }

    public function users()
    {
        $users = User::latest()->get();
        return view('users', ['users' => $users]);
    }
    
//     public function __construct()
// {
//     $this->middleware('type');
// }
}
