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
    .navbar navbar-expand-lg navbar-light bg-light{
        background:#b65959;
    }
    .link-muted { color: #aaa; } .link-muted:hover { color: #1266f1; }

    body{
    margin-top:20px;
    background:#FAFAFA;    
}
/*==================================================
  Nearby People CSS
  ==================================================*/

.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 20px;
  margin-bottom: 20px;
}

.people-nearby .google-maps .map{
  height: 300px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 20px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  margin-bottom: 20px;
}

img.profile-photo-lg{
  height: 80px;
  width: 80px;
  border-radius: 50%;
}
.link-muted { color: #aaa; } .link-muted:hover { color: #1266f1; }

    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-light  color: #aaa">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"> POSTS </a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          
        </li>
        <li class="nav-item active">
         
    
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="<?php echo e(route('user.show', Auth::user()->id)); ?>" class="btn btn-outline-success my-2 my-sm-0">Back</a>
      </form>
      <form class="form-inline my-2 my-lg-0">
        
      </form>    
      
    </div>
  </nav>

<!-- friend_suggestions.blade.php -->

<div class="container">
    <h4>Friend Suggestions</h4>
    <div class="row">
        <div class="col-md-8">
            <div class="people-nearby">
                <?php $__currentLoopData = $suggestedFriends ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suggestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="nearby-user">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <img src="<?php echo e($suggestion->image); ?>" alt="user" class="profile-photo-lg">
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <h5><a href="#" class="profile-link"><?php echo e($suggestion->name); ?></a></h5>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <form method="post" action="<?php echo e(route('friend-request.send', $suggestion->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-primary pull-right" type="submit">Add Friend</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($suggestedFriends ?? '' ?? ''->isEmpty()): ?>
                    <p>No friend suggestions at the moment.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/file/posts/resources/views/friendsuggestions.blade.php ENDPATH**/ ?>