
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Product</h4>
                </div>
                <div class="card-body">
                    

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>UPDATE POST</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?> 
                    
                        <!-- Add your input fields for post data -->
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="<?php echo e($post->name); ?>" required>
                          <br>
                        <label for="image">Image:</label>
                        <input type="file" name="image">
                    
                        <label for="description">Description:</label>
                        <textarea name="description" required><?php echo e($post->description); ?></textarea>
                    
                        <!-- Add other fields as needed -->
                    
                        <button type="submit">Update Post</button>
                    </form>
                    
        </div>
    </div>
</div>

<!-- Include your scripts here -->

</body>
</html><?php /**PATH /var/www/file/posts/resources/views/edit.blade.php ENDPATH**/ ?>