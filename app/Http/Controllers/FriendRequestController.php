<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use compact;


class FriendRequestController extends Controller
{
    // protected $middleware = ['auth'];

    // public function showRequests()
    // {
    //     $userId = Auth::id();

    //     // Retrieve pending friend requests for the authenticated user
    //     $friendRequests = FriendRequest::where('receiver_id', $userId)
    //         ->where('accepted', false)
    //         ->with('sender') // Assuming you have a 'sender' relationship in the FriendRequest model
    //         ->get();

    //     return view('friend', ['friendRequests' => $friendRequests]);
    // }
    public function showRequests()
    {
        // Retrieve pending friend requests for the current user
        $friendRequests = auth()->user()->receivedFriendRequests()
            ->where('accepted', false)
            ->get();
    
        return view('friend', ['friendRequests' => $friendRequests]);
    }
    
    
    
    
    public function sendRequest($receiverId)
    {
        $senderId = auth()->id();

        // Check if a request already exists
        if (!FriendRequest::where('sender_id', $senderId)->where('receiver_id', $receiverId)->exists()) {
            FriendRequest::create(['sender_id' => $senderId, 'receiver_id' => $receiverId]);
        }

        return redirect()->back();
    }

    public function acceptRequest($requestId)
    {
        $friendRequest = FriendRequest::findOrFail($requestId);
        $friendRequest->update(['accepted' => true]);

        // You may want to perform additional actions here, like adding friends to the users' friend list.

        return redirect()->back();
    }

    public function rejectRequest($requestId)
    {
        FriendRequest::destroy($requestId);

        return redirect()->back();
    }
//     public function friendSuggestions()
// {
//     // Get the IDs of users who have sent friend requests to the authenticated user
//     $usersWhoSentRequests = FriendRequest::where('receiver_id', auth()->id())
//         ->where('accepted', true) // Assuming accepted friendships
//         ->pluck('sender_id')
//         ->toArray();

//     // Get the IDs of users to whom the authenticated user has sent friend requests
//     $usersToWhomRequestsSent = FriendRequest::where('sender_id', auth()->id())
//         ->where('accepted', true) // Assuming accepted friendships
//         ->pluck('receiver_id')
//         ->toArray();

//     // Combine the two lists of users with accepted friend requests
//     $friendsIds = array_merge($usersWhoSentRequests, $usersToWhomRequestsSent);

//     // Add the current user's ID to the exclusion list
//     $friendsIds[] = auth()->id();

//     // Get suggested friends who are not already friends
//     $suggestedFriends = User::whereNotIn('id', $friendsIds)
//         ->where('id', '!=', auth()->id())
//         ->get();

//     return view('friendsuggestions', compact('suggestedFriends'));
// }
// use App\Models\FriendRequest;

public function friendSuggestions()
{
    // Get the IDs of users who are already friends or have sent/received friend requests
    $existingFriendIds = FriendRequest::where(function ($query) {
        $query->where('receiver_id', auth()->id())
            ->orWhere('sender_id', auth()->id())
            ->where('accepted', true);
    })->get() 
    ->pluck('sender_id')
    ->pluck( 'receiver_id')
    ->toArray();

    // Add the current user's ID to the exclusion list
    $existingFriendIds[] = auth()->id();

    // Get the IDs of users to whom the authenticated user has sent friend requests
    $sentFriendRequestIds = FriendRequest::where('sender_id', auth()->id())
        ->where('accepted', false)
        ->pluck('receiver_id')
        ->toArray();

    // Combine the two lists of users with pending friend requests and sent friend requests
    $excludedUserIds = array_merge($existingFriendIds, $sentFriendRequestIds);

    // Add the current user's ID to the exclusion list
    $excludedUserIds[] = auth()->id();

    // Get suggested friends who haven't sent/received friend requests
    $suggestedFriends = User::whereNotIn('id', $excludedUserIds)
        ->where('id', '!=', auth()->id())
        ->get();

    return view('friendsuggestions', compact('suggestedFriends'));
}

}

