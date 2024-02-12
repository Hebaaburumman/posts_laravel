<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"> POSTS </a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            
          </ul>
          <?php if(Auth::check()): ?>
          <a href="<?php echo e(route('user.show', Auth::user()->id)); ?>">Back</a>
      <?php endif; ?>
        </div>
      </nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit your profile</h4>
                </div>
                <div class="card-body">
                    

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>EDIT YOUR PROFILE</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('user.update', Auth::user()->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?> 
                    
                        <!-- Add your input fields for user data -->
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="<?php echo e($user->name); ?>" required>
                        <br>
                    
                        <label for="image">Image:</label>
                        <input type="file" name="image" value="<?php echo e($user->image); ?>">
                    
                        <label for="email">Email:</label>
                        <input type="text" name="email" value="<?php echo e($user->email); ?>">
                        
                        <!-- Add a password field -->
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Leave blank to keep the current password">
                    
                        <!-- Add other fields as needed -->
                    
                        <button name="submit" type="submit">Update User</button>
                    </form>
                    
                    
        </div>
    </div>
</div>

<!-- Include your scripts here -->

</body>
</html><?php /**PATH /var/www/file/posts/resources/views/editprofile.blade.php ENDPATH**/ ?>