<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\Comment;
use App\Models\Post;
use App\Models\FriendRequest;


class UserController extends Controller
{
//     public function list()
// {
    
   
//     $users =user::orderBy('created_at', 'desc')->get();
   

//     return view('users', ['users' => $users]);
// }
    

public function store(Request $request)
{
    // Create a new user
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email'); // Assuming your email input field is 'email'
    $user->password = bcrypt($request->input('password')); // Use bcrypt to hash the password
    $user->save();

    // Redirect to a success page or wherever you want
    return redirect()->route('posts.show', $user->id)->with('success', 'User created successfully');
}


    
   
    
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->route('user.list')->with('success', 'user deleted successfully');
    }

    
    public function show($user)
{
    $user = User::find($user);

    if (!$user) {
        abort(404, 'User not found');
    }

    // Assuming you have a relationship defined in the User model for posts
    $posts = $user->posts()->latest()->get();
    $userFriends = $user->getExistingFriendNames();

    return view('userprofile', compact('user', 'posts','userFriends'));
}
public function showProfile(User $user)
    {
        // Assuming you have a relationship defined in the User model for posts
        $posts = $user->posts()->latest()->get();       
        $userFriends = $user->getExistingFriendNames();
 
        return view('profile', compact('user', 'posts','userFriends'));
    }








// public function showOwnProfile()
// {
//     // Get the authenticated user
//     $user = auth()->user();

//     // Call the method to get friend names
//     $userFriends = $user->getExistingFriendNames();
   
//     // Redirect to the user's profile using the user ID
//     return view('user.profile', compact('user', 'userFriends'));
// }

public function edit()
{
    $user = Auth::user();

    if (!$user) {
        abort(404, 'User not found');
    }

    return view('editprofile', compact('user'));
}


public function update(Request $request, $userId)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust validation as needed
        'email' => 'required|email',
        'password' => 'nullable|string|min:8', // Allow null or a string with minimum length of 8
    ]);

    $user = Auth::user();

    if (!$user) {
        abort(404, 'User not found');
    }

    // Update user fields
    $user->name = $request->input('name');
    $user->email = $request->input('email');

    // Update image if provided
    if ($request->hasFile('image')) {
        // Move the uploaded file to the public folder
        $imagePath = $request->file('image')->move(public_path('img'), $request->file('image')->getClientOriginalName());
    
        // Update the user's image path
        $user->image = 'img/' . $request->file('image')->getClientOriginalName();
    }
    // Update password if provided
    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    $user->save();

    return redirect()->route('user.show', $user->id)->with('success', 'User updated successfully.');
}


public function showOwnProfile()
{
    // Get the authenticated user
    $user = auth()->user();

    // Call the method to get friend names
    $userFriends = $user->getExistingFriendNames();
   
    // Redirect to the user's profile using the user ID
    return view('user.profile', compact('user', 'userFriends'));
}



    public function assignAdminRole($userId)
    {
        // Check if the authenticated user is an admin
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized');
        }

        // Find the user by ID
        $user = User::find($userId);

        // Check if the user exists
        if (!$user) {
            abort(404, 'User not found');
        }

        // Attach the admin role to the user
        $adminRole = Role::where('name', 'admin')->first();

        if (!$adminRole) {
            abort(500, 'Admin role not found');
        }

        $user->roles()->sync([$adminRole->id]);

        return redirect()->back()->with('success', 'Admin role assigned successfully.');
    }

    

}
