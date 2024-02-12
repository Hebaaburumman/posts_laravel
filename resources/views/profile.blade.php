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
            {{-- <a class="nav-link" href="{{ route('user.edit', Auth::user()->id) }}">Edit profile <span class="sr-only"></span></a> --}}
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
      {{-- <form class="form-inline my-2 my-lg-0">
        <a href="{{ route('posts.create') }}" class="btn btn-outline-success my-2 my-sm-0">ADD POST</a>
      </form> --}}
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

</div>
</div>
</div>