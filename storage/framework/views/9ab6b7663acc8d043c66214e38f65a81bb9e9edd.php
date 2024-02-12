<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>posts</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add this link in the head section of your HTML file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Q3VQVZDe+xUETMQ0Z2AqP6p2R6tJDeA3QDrtka4D/PTNtnnj4Cv7Q4GxI1BBCC5FF" crossorigin="anonymous" />

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Q3VQVZDe+xUETMQ0Z2AqP6p2R6tJDeA3QDrtka4D/PTNtnnj4Cv7Q4GxI1BBCC5FF" crossorigin="anonymous" />




<style>
.link-muted { color: #aaa; } .link-muted:hover { color: #1266f1; }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"> POSTS </a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <form class="form-inline my-2 my-lg-0">
            <?php if(Auth::check()): ?>
                <a href="<?php echo e(route('user.show', Auth::user()->id)); ?>">View User Profile</a>
            <?php endif; ?>
          </form>     </li>
          
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
      <form class="form-inline my-2 my-lg-0">
        <a href="<?php echo e(route('friend-requests')); ?>" class="btn btn-outline-success my-2 my-sm-0">Friend Request</a>
      </form>
      
      <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form"class="form-inline my-2 my-lg-0">
        <?php echo csrf_field(); ?> <!-- CSRF protection -->
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
     
    </div>
  </nav>
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section style="background-color: #e7effd;">
    <div class="container  py-4 text-dark">
      <div class="row d-flex justify-content-center">
        <div class="col-md-11 col-lg-9 col-xl-7">
          
          <div class="d-flex flex-start mb-4">
            
            <?php if($post->user->image): ?>
            <img class="rounded-circle shadow-1-strong me-3" src="<?php echo e(asset($post->user->image)); ?>" alt="avatar" width="65" height="65" />
        <?php else: ?>
            <img class="rounded-circle shadow-1-strong me-3" src="<?php echo e(asset('/img/1705434962.jpg')); ?>" alt="hhh" width="65" height="65" />
        <?php endif; ?>
          
            <div class="card w-100">
              <div class="media-heading p-1">
                <small class="float-right"><?php echo e($post->created_at->diffForHumans()); ?></small>
            </div>
              <div class="card-body p-3">
                  <div class="">
                    <h5><?php echo e($post->user->name); ?> </h5>
                  
                  <p>
                    <?php echo e($post->description); ?>

                  </p>
                  <?php if($post->image): ?>
                  <img src="<?php echo e(asset($post->image)); ?>" alt="Post Image" class="img-fluid">
                  <?php endif; ?>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      
                      
                      <a href="<?php echo e(route('comments.show', $post->id)); ?> "class="link-muted">Comments <?php echo e($post->comments->count()); ?></a>

                    </div>

                    <a href="<?php echo e(route('comments.show', $post->id)); ?> "class="link-muted">Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
          
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
  </html><?php /**PATH /var/www/file/posts/resources/views/show.blade.php ENDPATH**/ ?>