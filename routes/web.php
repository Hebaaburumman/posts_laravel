<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FriendRequestController;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Responce;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  routes for posts


// Route::prefix('admin')->group(function() {
//     Route::get('test', function() {
//         echo 'Admin test page';
//     });
// });
// Route::prefix('admin')->group(function () {
//     // Admin dashboard route
//     Route::get('/posts', [AdminController::class,'posts']);

//     // Other admin routes
//     Route::get('/users', [AdminController::class,'users']);
    // Route::get('/settings', [AdminController::class,'settings'])->name('admin.settings');
    // Add more routes as needed
// });
// Route::middleware(['admin'])->group(function () {
//     Route::get('/admin/posts', [AdminController::class, 'posts'])->name('admin.posts');
//     Route::get('/admin/users', [AdminController::class,'users'])->name('admin.users');

    
    


// });

Route::prefix('admin')->middleware(['type:admin'])->group(function () {
    Route::get('/posts', [AdminController::class, 'posts'])->name('admin.posts');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
});








// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/posts', [AdminController::class, 'posts'])->name('admin.posts');
//     Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
// });

// Redirect unauthorized users to the login page
Route::get('/login', function () {
    return redirect()->route('login');
})->name('login');

// Route::get('/', [PostController::class, 'list'])->name('posts.list');
Route::get('/show', [PostController::class, 'view'])->name('posts.show');;
Route::get('/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/create', [PostController::class, 'store'])->name('posts.store');

Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/update/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');


Route::get('/register', [SignupController::class, 'show'])->name('register');

// Process registration form
Route::post('/register', [SignupController::class, 'store'])->name('register.store');

// Show login form
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::get('/friend-profile/{user}', [UserController::class, 'showProfile'])->name('friend.profile');


// Process login form
Route::post('/login', [LoginController::class, 'login'])->name('login.check');

Route::post('/logout', [LogoutController::class,'logout'])->name('logout');

// // routes for signup/login
// Route::get('/register', [SignupController::class, 'show'])->name('register');
// Route::post('/register', [SignupControllerr::class, 'register']);
// Route::post('/register', [SignupController::class, 'store'])->name('register.store');

// Route::get('/login', [LoginController::class, 'show'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// routes for users 

// Route::get('/users', [UserController::class, 'list'])->name('user.list');

// Store a new user
Route::post('/users', [UserController::class, 'store'])->name('user.store');

// Delete a user
Route::delete('/users/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::get('/comments/{postId}', [CommentController::class, 'show'])->name('comments.show');
Route::post('/post-comment', [CommentController::class, 'postComment'])->name('post-comment');

Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');

// Show the user update form
Route::get('/users/{Id}/edit', [UserController::class, 'edit'])->name('user.edit');

// Update the user details
Route::put('/users/{Id}', [UserController::class, 'update'])->name('user.update');

Route::get('/users/{userId}/assign-admin-role', [UserController::class, 'assignAdminRole'])->name('user.assignAdminRole');

Route::get('/friend-suggestions', [FriendRequestController::class, 'friendSuggestions'])
        ->name('friend-suggestions');


// Route::middleware(['auth'])->group(function () {
    Route::post('/send-request/{receiverId}', [FriendRequestController::class, 'sendRequest'])->name('friend-request.send');
    Route::post('/accept-request/{requestId}', [FriendRequestController::class, 'acceptRequest'])->name('friend-request.accept');
    Route::post('/reject-request/{requestId}', [FriendRequestController::class, 'rejectRequest'])->name('friend-request.reject');
    Route::get('/friend-requests', [FriendRequestController::class, 'showRequests'])->name('friend-requests');
    // Route::get('/friend-suggestions', [FriendRequestController::class, 'friendSuggestions'])
    //     ->name('friend-suggestions');

// });

// web.php
// Route::post('/send-message',function (Request $request){
//     event(new Message($request->name, $request->message));
//     return ['success' => true];
// });

// Route::post('/send-message', [pusherController::class,'sendMessage'])->name('pusher.sendmessage');
// Route::post('/index', function () {
//     return view('message');
// });
Route::match(['get', 'post'], '/index', function () {
    return view('message');
});

Route::any('/send-message', function(Request $request){
  event(
    new Message (
        $request->input('username'),
        $request->input('message')
    ));
    return["sucsess"=> true];
});
