
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
                    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- Assuming you are using the PUT method for updates --}}
                    
                        <!-- Add your input fields for post data -->
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{ $post->name }}" required>
                          <br>
                        <label for="image">Image:</label>
                        <input type="file" name="image">
                    
                        <label for="description">Description:</label>
                        <textarea name="description" required>{{ $post->description }}</textarea>
                    
                        <!-- Add other fields as needed -->
                    
                        <button type="submit">Update Post</button>
                    </form>
                    
        </div>
    </div>
</div>

<!-- Include your scripts here -->

</body>
</html>