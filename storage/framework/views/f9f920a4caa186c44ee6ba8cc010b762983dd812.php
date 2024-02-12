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
            <a class="nav-link" href="<?php echo e(route('user.edit', Auth::user()->id)); ?>">Edit profile <span class="sr-only"></span></a>
          </li> 
          


        <li class="nav-item active">
          <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
        </li>
      </ul>
      
      <form class="form-inline my-2 my-lg-0">
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-outline-success my-2 my-sm-0">ADD POST</a>
      </form>
      <a href="<?php echo e(route('posts.show')); ?>" class="btn btn-outline-success my-2 my-sm-0">Homepage</a>

      
      <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form"class="form-inline my-2 my-lg-0">
        <?php echo csrf_field(); ?> <!-- CSRF protection -->
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
     
    </div>
  </nav>


   <div class="container">
<div class="row">
<div class="col-lg-4">
<div class="card card-profile">
<div style="background-image: url(https://demo.bootstrapious.com/admin-premium/1-4-5/img/photos/paul-morris-116514-unsplash.jpg);" class="card-header"></div>
<div class="card-body text-center"><img src="<?php echo e(asset($user->image)); ?>" class="card-profile-img">
  <h3 class="mb-3"><?php echo e($user->name); ?></h3>
  <p class="mb-4">One morning, when Gregor Samsa woke from troubled </p>
   
</div>
</div>
<div class="card">
<div class="card-body">
  <div class="media"><span ></span>
    <div class="media-body">
      <?php if($userFriends->count() > 0): ?>
        <h4>Friends (<?php echo e($userFriends->count()); ?>)</h4>
    <ul>
        <?php $__currentLoopData = $userFriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="media">
          <div style="background-image: url('<?php echo e(asset($friend->image)); ?>')" class="media-object avatar avatar-md mr-3"></div>
          <div class="media-body">
           
            <?php if(isset($friend)): ?>
            <a href="<?php echo e(url('/friend-profile/' . $friend->id)); ?>"><?php echo e($friend->name); ?></a>
        <?php endif; ?>
        
          
        

            </form> 
            
          </div>
        </div>
     
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </ul>
<?php else: ?>
    <p>No accepted friends yet.</p>
<?php endif; ?>
      
    </div>
  </div>
</div>
</div>

  
      
   


</div>
<div class="col-lg-8">
    
<div class="card">
<div class="">
    <div >

</div>
</div>
</div>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="list-group card-list-group">
  <div class="list-group-item py-5">
    <div class="media">
        <div style="background-image: url('<?php echo e(asset($user->image)); ?>')" class="media-object avatar avatar-md mr-3"></div>
        <div class="media-body">
        
        <!-- Assuming $post->created_at is a timestamp in your Post model -->
<div class="media-heading">
    <small class="float-right"><?php echo e($post->created_at->diffForHumans()); ?></small>
</div>
    
          <h5><?php echo e($user->name); ?></h5>
        
        
        <div class="text-muted text-small"><?php echo e($post->description); ?></div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              
              <a href="<?php echo e(route('comments.show', $post->id)); ?> "class="link-muted">Comments <?php echo e($post->comments->count()); ?></a>

            </div>
            <a href="<?php echo e(route('comments.show', $post->id)); ?> "class="link-muted">Reply</a>
          </div>
        
           
      </div>
    </div>
  </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
  </div>

</div>
</div>
</div><?php /**PATH /var/www/file/posts/resources/views/userprofile.blade.php ENDPATH**/ ?>