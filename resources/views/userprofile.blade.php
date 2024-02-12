<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<style>
body{
    margin-top:20px;
    background:#eee;
}
.card {
    background-color: #fff;
    border: 0 solid #eee;
    border-radius: 0;
}
.card {
    margin-bottom: 30px;
    -webkit-box-shadow: 2px 2px 2px rgba(0,0,0,0.1), -1px 0 2px rgba(0,0,0,0.05);
    box-shadow: 2px 2px 2px rgba(0,0,0,0.1), -1px 0 2px rgba(0,0,0,0.05);
}

.card-profile .card-header {
    height: 9rem;
    background-size: cover;
    background-position: center center
}

.card-profile-img {
    max-width: 8rem;
    margin-top: -6rem;
    margin-bottom: 1rem;
    border: 3px solid #fff;
    border-radius: 100%
}

.avatar {
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    border-radius: 50%;
    display: inline-block;
    background: #ced4da no-repeat center/cover;
    position: relative;
    text-align: center;
    color: #868e96;
    font-weight: 600;
    vertical-align: bottom
}

.avatar.avatar-md {
    width: 3rem;
    height: 3rem
}

.avatar.avatar-lg {
    width: 4rem;
    height: 4rem
}

.avatar.avatar-xl {
    width: 5rem;
    height: 5rem
}

.avatar.avatar-xxl {
    width: 7rem;
    height: 7rem;
    min-width: 7rem
}

.card-header:first-child {
    border-radius: 0 0 0 0;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: 1rem 1.25rem;
    background-color: #fff;
    border-bottom: 1px solid #eee;
}
.card-header {
    -webkit-box-shadow: 2px 2px 2px rgba(0,0,0,0.05);
    box-shadow: 2px 2px 2px rgba(0,0,0,0.05);
}

</style>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"> POSTS </a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('user.edit', Auth::user()->id) }}">Edit profile <span class="sr-only"></span></a>
          </li> 
          {{-- <form class="form-inline my-2 my-lg-0">
            <a href="{{ route(''') }}" class="btn btn-outline-success my-2 my-sm-0">Messeges</a>
          </form>
          <form class="form-inline my-2 my-lg-0">
    <a href="{{ route('friend-requests') }}" class="btn btn-outline-success my-2 my-sm-0">Friend Request</a>
</form> --}}


        <li class="nav-item active">
          @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        </li>
      </ul>
      {{-- <form class="form-inline my-2 my-lg-0">
        <a href="{{ route('posts.create') }}" class="btn btn-outline-success my-2 my-sm-0">ADD POST</a>
      </form> --}}
      <form class="form-inline my-2 my-lg-0">
        <a href="{{ route('posts.create') }}" class="btn btn-outline-success my-2 my-sm-0">ADD POST</a>
      </form>
      <a href="{{ route('posts.show') }}" class="btn btn-outline-success my-2 my-sm-0">Homepage</a>

      {{-- <form class="form-inline my-2 my-lg-0">
        <a href="{{ route('login') }}" class="btn btn-outline-success my-2 my-sm-0">login</a>
      </form>       --}}
      <form action="{{ route('logout') }}" method="POST" id="logout-form"class="form-inline my-2 my-lg-0">
        @csrf <!-- CSRF protection -->
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
     
    </div>
  </nav>


   <div class="container">
<div class="row">
<div class="col-lg-4">
<div class="card card-profile">
<div style="background-image: url(https://demo.bootstrapious.com/admin-premium/1-4-5/img/photos/paul-morris-116514-unsplash.jpg);" class="card-header"></div>
<div class="card-body text-center"><img src="{{ asset($user->image) }}" class="card-profile-img">
  <h3 class="mb-3">{{ $user->name }}</h3>
  <p class="mb-4">One morning, when Gregor Samsa woke from troubled </p>
   {{-- <form action="{{ route('user.edit ') }}" method="POST" class="form-inline my-2 my-lg-0">
    @csrf <!-- CSRF protection -->
    <button type="submit" class="btn btn-link">Edit Your Profile<</button>
</form> --}}
</div>
</div>
<div class="card">
<div class="card-body">
  <div class="media"><span ></span>
    <div class="media-body">
      @if ($userFriends->count() > 0)
        <h4>Friends ({{ $userFriends->count() }})</h4>
    <ul>
        @foreach ($userFriends as $friend)
        <div class="media">
          <div style="background-image: url('{{ asset($friend->image) }}')" class="media-object avatar avatar-md mr-3"></div>
          <div class="media-body">
           {{-- <form class="form-inline my-2 my-lg-0" > --}}
            @if(isset($friend))
            <a href="{{ url('/friend-profile/' . $friend->id) }}">{{ $friend->name }}</a>
        @endif
        
          
        {{-- {{ $friend->name }} --}}

            </form> 
            {{-- {{ $friend->name }}  --}}
          </div>
        </div>
     
          @endforeach 
    </ul>
@else
    <p>No accepted friends yet.</p>
@endif
      {{-- <h4>John Doe</h4>
      <p class="text-muted mb-0">Coder</p>
      <ul class="social-links list-inline mb-0 mt-2">
        <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nathan's Facebook"><i class="fa fa-facebook"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="@nathan_andrews"><i class="fa fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="+420777555987"><i class="fa fa-phone"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="@nathan"><i class="fa fa-skype"></i></a></li>
      </ul> --}}
    </div>
  </div>
</div>
</div>
{{-- <div class="card-header">
  @if ($userFriends->count() > 0)
    <h2>Friends</h2>
    <ul>
        @foreach ($userFriends as $friend)
        <div class="media">
          <div style="background-image: url('{{ asset($friend->image) }}')" class="media-object avatar avatar-md mr-3"></div>
          <div class="media-body">
            {{ $friend->name }} 
          </div>
        </div>
     
          @endforeach 
    </ul>
@else
    <p>No accepted friends yet.</p>
@endif
  </div>
</div> --}}
  {{-- <div class="media-heading">
  </div>
      
            <h5>{{ $user->name }}</h5>
            <li>{{ $friend->name }} - {{ $friend->email }}</li> --}}
      
   

{{-- <div class="card-header">
  @if ($userFriends->count() > 0)
    <h2>Friends</h2>
    <ul>
        @foreach ($userFriends as $friend)
            <li>{{ $friend->name }} - {{ $friend->email }}</li>
        @endforeach 
    </ul>
@else
    <p>No accepted friends yet.</p>
@endif
  <h3 class="card-title">My Profile</h3>
</div>
<div class="card-body">
  <div class="row mb-3">
    <div class="col-auto d-flex align-items-center"><span style="background-image: url(https://bootdey.com/img/Content/avatar/avatar2.png)" class="avatar avatar-lg"></span></div>
    <div class="col">
      <div class="form-group">
        <label class="form-label">Name</label>
        <input placeholder="Your name" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label class="form-label">Bio</label>
    <textarea rows="8" class="form-control">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream.</textarea>
  </div>
  <div class="form-group">
    <label class="form-label">Email</label>
    <input placeholder="you@domain.com" class="form-control">
  </div>
  <div class="form-group">
    <label class="form-label">Password</label>
    <input type="password" value="password" class="form-control">
  </div>
</div>
<div class="card-footer text-right">
  <button class="btn btn-primary">Save</button>
</div>
</form> --}}
</div>
<div class="col-lg-8">
    
<div class="card">
<div class="">
    <div >
{{-- <div class="card-body">
  <div class="input-group">
    <input type="text" placeholder="Add Post" class="form-control">
    <div class="input-group-append">
      <button type="button" class="btn btn-outline-secondary"><i class="fa fa-send"></i></button>
    </div>
  </div> --}}
</div>
</div>
</div>
@foreach ($posts as $post)
<div class="list-group card-list-group">
  <div class="list-group-item py-5">
    <div class="media">
        <div style="background-image: url('{{ asset($user->image) }}')" class="media-object avatar avatar-md mr-3"></div>
        <div class="media-body">
        {{-- <div class="media-heading"><small class="float-right">10 min</small> --}}
        <!-- Assuming $post->created_at is a timestamp in your Post model -->
<div class="media-heading">
    <small class="float-right">{{ $post->created_at->diffForHumans() }}</small>
</div>
    
          <h5>{{ $user->name }}</h5>
        {{-- </div> --}}
        
        <div class="text-muted text-small">{{ $post->description }}</div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              {{-- <a href="#!" class="link-muted me-2">like<i class="fas fa-thumbs-up me-1"></i>132</a> --}}
              <a href="{{route('comments.show', $post->id)}} "class="link-muted">Comments {{ $post->comments->count() }}</a>

            </div>
            <a href="{{route('comments.show', $post->id)}} "class="link-muted">Reply</a>
          </div>
        {{-- <div class="media-list">
          <div class="media mt-4">
            <div style="background-image: url(https://bootdey.com/img/Content/avatar/avatar3.png)" class="media-object avatar mr-3"></div>
            {{-- <div class="media-body text-muted text-small"><strong class="text-dark">Serenity Mitchelle: </strong>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream.</div> --}}
          {{-- </div>
          
          <div class="media mt-4">
            <div style="background-image: url(https://bootdey.com/img/Content/avatar/avatar4.png)" class="media-object avatar mr-3"></div>
            <div class="media-body text-muted text-small"><strong class="text-dark">Tony O'Brian: </strong>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</div>
          </div>
        </div> --}} 
      </div>
    </div>
  </div>
 @endforeach
 
  </div>
{{-- <form class="card">
<div class="card-body">
  <h3 class="card-title">Edit Profile</h3>
  <div class="row">
    <div class="col-md-5">
      <div class="form-group mb-4">
        <label class="form-label">Company</label>
        <input type="text" placeholder="Company" value="Nathan &amp; Nathan" class="form-control">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="form-group mb-4">
        <label class="form-label">Username</label>
        <input type="text" placeholder="Username" value="nathan" class="form-control">
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="form-group mb-4">
        <label class="form-label">Email address</label>
        <input type="email" placeholder="Email" class="form-control">
      </div>
    </div>
    <div class="col-sm-6 col-md-6">
      <div class="form-group mb-4">
        <label class="form-label">First Name</label>
        <input type="text" placeholder="First name" class="form-control">
      </div>
    </div>
    <div class="col-sm-6 col-md-6">
      <div class="form-group mb-4">
        <label class="form-label">Last Name</label>
        <input type="text" placeholder="Last Name" class="form-control">
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group mb-4">
        <label class="form-label">Address</label>
        <input type="text" placeholder="Home Address" class="form-control">
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="form-group mb-4">
        <label class="form-label">City</label>
        <input type="text" placeholder="City" class="form-control">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="form-group mb-4">
        <label class="form-label">ZIP</label>
        <input type="number" placeholder="ZIP" class="form-control">
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group mb-4">
        <label class="form-label">Country</label>
        <select class="form-control custom-select">
          <option value="">UK</option>
          <option value="">US</option>
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group mb-0">
        <label class="form-label">About Me</label>
        <textarea rows="5" placeholder="Here can be your description" value="Mike" class="form-control">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream.</textarea>
      </div>
    </div>
  </div>
</div>
<div class="card-footer text-right">
  <button type="submit" class="btn btn-primary">Update Profile</button>
</div>
</form> --}}
</div>
</div>
</div>