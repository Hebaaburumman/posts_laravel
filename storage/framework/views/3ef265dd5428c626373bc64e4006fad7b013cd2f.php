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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-outline-success my-2 my-sm-0">ADD POST</a>
      </form>
      <form class="form-inline my-2 my-lg-0">
        <a href="<?php echo e(route('posts.show')); ?>" class="btn btn-outline-success my-2 my-sm-0">BACK</a>
      </form>    
      
    </div>
  </nav>
  
        <section style="background-color: #e7effd;">
            <div class="container py-4 text-dark">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-11 col-lg-9 col-xl-7">
                        <div class="d-flex flex-start mb-4">
                            <img class="rounded-circle shadow-1-strong me-3" src="<?php echo e(asset($post->user->image)); ?>" alt="avatar" width="65" height="65" />
                            <div class="card w-100">
                                <div class="media-heading">
                                    <small class="float-right"><?php echo e($post->created_at->diffForHumans()); ?></small>
                                </div>
                                <div class="card-body p-4">
                                    <div class="">
                                        <h5><?php echo e($post->user->name); ?></h5> endifcan
                                        
                                        <p><?php echo e($post->description); ?></p>
                                        <?php if($post->image): ?>
                                        <img src="<?php echo e(asset($post->image)); ?>" alt="Post Image" class="img-fluid">
                                        <?php endif; ?>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                        </div>
                                        <div class="bg-white">
                                            <div class="d-flex flex-row fs-12">
                                                
                                                
                                            </div> 
                                        </div>
                                        <div class="bg-light p-2">
                                            <form id="commentForm" action="<?php echo e(route('post-comment' )); ?>" method="post">                                                    <?php echo csrf_field(); ?>
                                                    
                                                <div class="d-flex flex-row align-items-start">
                                                        
                                                        <textarea class="form-control ml-1 shadow-none textarea" name="content" placeholder="Add a comment"></textarea>
                                                    </div>
                                                    <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>" />

                                                    <div class="mt-2 text-right">
                                                        <button type="submit" name="submit" class="btn btn-primary btn-sm shadow-none">Comment</button>
                                                        
                                                    </div>
                                                </form>
                                                
                                                <div class="media-list">
                                                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="media-heading">
                                                        <small class="float-right"><?php echo e($comment->created_at->diffForHumans()); ?></small>
                                                    </div>
                                                        <div class="media mt-4">
                                                            
                                                            <div style="background-image: url(<?php echo e(asset($comment->user->image)); ?>)" class="media-object avatar mr-3"></div>
                                                            <div class="media-body text-muted text-small">
                                                                <strong class="text-dark"><?php echo e($comment->user->name); ?> <br></strong>
                                                                <?php echo e($comment->content); ?>

                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            function postComment() {
                var commentText = $('#commentText').val();
                var postId = <?php echo e($post->id); ?>; // Assuming you pass the post ID to the view
        
                if (commentText.trim() !== '') {
                    $.ajax({
                        url: '<?php echo e(route('post-comment')); ?>',
                        type: 'POST',
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            post_id: postId,
                            content: commentText
                        },
                        success: function () {
                            // Optionally, you can update the UI or display a success message
                            alert('Comment posted successfully.');
                            location.reload(); // Refresh the page to see the new comment
                        },
                        error: function (error) {
                            console.error('Error posting comment: ', error);
                        }
                    });
                }
            }
        
            function cancelComment() {
                // Clear the comment textarea
                $('#commentText').val('');
            }
        </script>
</body>
</html><?php /**PATH /var/www/file/posts/resources/views/comment.blade.php ENDPATH**/ ?>