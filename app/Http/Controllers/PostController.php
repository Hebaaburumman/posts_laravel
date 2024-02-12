<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class PostController extends Controller
{
//     public function list()
// {
    
//     // Fetch and display a list of posts
//     $posts = Post::orderBy('created_at', 'desc')->get();

//     return view('admin', ['posts' => $posts]);
// }
public function view()
{
    $posts = Post::orderBy('created_at', 'desc')->get();
    $user = Auth::user(); // Corrected usage to retrieve authenticated user

    return view('show', [
        'posts' => $posts,
        'user' => $user, // Corrected variable name to 'user'
    ]);

}
    public function store(Request $request)
{
    

    $user = Auth::user();
    

    if ($user) {
        
        // Handle file upload if an image is provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $imagePath = 'img/' . $imageName;
        }

        // Create a new post associated with the user
        $post = new Post();
        $post->name = $user->name; // Set the post's name to the user's name
        $post->image = $imagePath; // Set the post's image to the uploaded image path
        $post->description = $request->input('description');

        // Associate the post with the user
        $user->posts()->save($post);

        // Redirect to a success page or wherever you want
        return redirect()->route('posts.show', $post->id)->with('success', 'Post created successfully');
    } else {
        // Handle the case where the user is not authenticated
        return redirect()->route('login')->with('error', 'You must be logged in to create a post.');
}
}


  public function create(){

   return view ('create');
    }



    public function edit($id){
        
        $post = Post::findOrFail($id); // Find the post by ID
        return view('edit', ['post' => $post]);
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
        ]);
    
        $post = Post::findOrFail($id);
        $post->name = $request->input('name');
        $post->description = $request->input('description');
    
        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // You can customize the storage path
            $post->image = $imagePath;
        }
    
        $post->save();
    
        return redirect()->route('posts.list', $post->id)->with('success', 'Post updated successfully');
    }
    
    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
    
        return redirect()->route('posts.list')->with('success', 'Post deleted successfully');
    }

    // public function show($user){}




   public function show($postId)
    {
        // Retrieve the post
        $post = Post::find($postId);

        if (!$post) {
            abort(404, 'Post not found');
        }

        // Retrieve the comments for the post
        $comments = $post->comments;

        return view('posts.show', compact('post', 'comments'));
    }


}
