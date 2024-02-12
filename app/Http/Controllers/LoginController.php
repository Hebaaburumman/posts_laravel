<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
    
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            
        ]);
        // Attempt to get the user based on the email address
        $user = User::where('email', $request->email)->first();
    
        // Check if the user exists and the password is correct
        if ($user && Hash::check($request->password, $user->password)) {
            
            // Authentication passed, log in the user
            Auth::login($user, $request->has('remember'));
            Auth::user();

    // Redirect to a success page or wherever you want
    $successMessage = 'Welcome, ' . $user->name . '!';
    return redirect()->route('posts.show', $user->id)->with('success', $successMessage);
             
            
        }
    
        // Authentication failed, redirect back with an error message
        throw ValidationException::withMessages([
            'email' => ['These credentials do not match our records.'],
        ])->redirectTo(route('login'));
    }

   
        public function __construct()
    {
        $this->middleware('guest');
    }
}