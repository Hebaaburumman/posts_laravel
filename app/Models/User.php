<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    

    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function sentFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'sender_id', 'id');
    }

    // Define the incoming friend requests relationship
    public function receivedFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'receiver_id', 'id');
    }
    // public function friendRequests()
    // {
    //     return $this->hasMany(FriendRequest::class, 'sender_id', 'id')
    //         ->orWhere(function ($query) {
    //             $query->where('receiver_id', $this->id)
    //                 ->where('accepted', true);
    //         });
    // }


    public function sentMessages()
{
    return $this->hasMany(Message::class, 'sender_id');
}

public function receivedMessages()
{
    return $this->hasMany(Message::class, 'receiver_id');
}
public function friendRequests()
{
    return $this->hasMany(FriendRequest::class, 'receiver_id');
}

// public function acceptedFriends()
// {
//     return $this->friendRequests()
//         ->where('accepted', true)
//         ->with('sender') // Assuming you have a 'sender' relationship in FriendRequest
//         ->get();
// }
public function getExistingFriendNames()
{
    $friendIds = FriendRequest::where(function ($query) {
        $query->where('receiver_id', $this->id)
            ->orWhere('sender_id', $this->id)
            ->where('accepted', true);
    })->pluck('sender_id')
      ->merge(FriendRequest::where('sender_id', $this->id)
          ->where('accepted', true)
          ->pluck('receiver_id'))
      ->toArray();
    
    // Retrieve User models for the friend IDs
    $friends = User::whereIn('id', $friendIds)->get();

    return $friends;
}



}
