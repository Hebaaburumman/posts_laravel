<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
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
          <a class="nav-link" href="#">ADMIN <span class="sr-only"></span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ADD POST</button>
      </form>
    </div>
  </nav>
  
<section style="background-color: #e7effd;">
    
    <div class="container my-5 py-5 text-dark">
      <div class="row d-flex justify-content-center">
        <div class="col-md-11 col-lg-9 col-xl-7">
          <div class="d-flex flex-start mb-4">
            <img class="rounded-circle shadow-1-strong me-3"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" width="65"
              height="65" />
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="">
                  <h5>Johny Cash</h5>
                  <p class="small">3 hours ago</p>
                  <p>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                    ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                    Donec lacinia congue felis in faucibus ras purus odio, vestibulum in
                    vulputate at, tempus viverra turpis.
                  </p>
  
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                      <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a>
                    </div>
                    <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="d-flex flex-start">
            <img class="rounded-circle shadow-1-strong me-3"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp" alt="avatar" width="65"
              height="65" />
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="">
                  <h5>Mindy Campbell</h5>
                  <p class="small">5 hours ago</p>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                    cumque doloribus dolorum dolor repellat nemo animi at iure autem fuga
                    cupiditate architecto ut quam provident neque, inventore nisi eos quas?
                  </p>
  
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>158</a>
                      <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>13</a>
                    </div>
                    <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </html><?php /**PATH /var/www/html/posts/resources/views/show.blade.php ENDPATH**/ ?>