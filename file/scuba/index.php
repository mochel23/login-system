<?php
session_start();
require '../db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: https://www.robertmochel.com/index.php');
exit;
}
?>
?>
<!-- <script>alert("Image inserted into database"</script> -->
      

<!-- The actual site --> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css">
  </head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="scuba.css">
    <title>Scuba Tour</title>
  </head>
  <body>

      <nav class="navbar navbar-dark fixed-top" id="topcolor">
        <div class="container">
          <a href="../home.php" class="navbar-brand"><i class="fas fa-water mr-3"></i>SCUBAE TOUR</a>
        </div>  
      </nav>
          <section id="header" class="jumbotron text-center">
            <h1 class="display-3">Scuba Diving Tours</h1>
            <p class="lead">Amy and Robert would like to help you run your scuba tour!!!  
              All you need to be thinking about is diving,
              we will concentrate on the details....
            </p>
            <a href="" class="btn btn-primary">Sign up</a>
            <a href="" class="btn btn-success">Contact us</a>
          </section>

          <section id="gallery">
            <div class="container">
                <div class="card-deck">
                    <div class="card">
                      <img src="https://images.unsplash.com/photo-1487252333087-c353573e2b7c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">Dive with Sharks</h5>
                          <p class="card-text">Want to learn and experiecne abit sharks?  Dive in Belize...</p>
                          <a href="https://www.youtube.com/watch?v=PTbySm4leV4" target="_blank" class="btn btn-outline-success btn-sm">Watch it.</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                      </div>

                    </div>
                    <div class="card">
                      <img src="https://images.unsplash.com/photo-1555902109-104d02431631?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">Dive with Sharks</h5>
                          <p class="card-text">Want to learn and experiecne abit sharks?  Dive in Belize...</p>
                          <a href="https://www.youtube.com/watch?v=G6t6vvhEboU&list=UU7Vb9HZotnM4XUv9UXxTlfg" target="_blank" class="btn btn-outline-success btn-sm">Watch it.</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                      </div>

                    </div>
                    <div class="card">
                      <img src="https://images.unsplash.com/photo-1533787896899-91b040188f57?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1440&q=80" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">Dive with Sharks</h5>
                          <p class="card-text">Want to learn and experiecne abit sharks?  Dive in Belize...</p>
                          <a href="" class="btn btn-outline-success btn-sm">Watch it.</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                      </div>
                    </div>
                  </div>


                  <!-- another set fot 3 -->
                  
          </section>
          
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, provident? Voluptatem perspiciatis corporis voluptatum commodi adipisci totam quae facilis officiis.</p>
                  </div>
                </div>
          </div>
          <footer class="page-footer font-small pt-4">
            <div class="container text-center">
              <h5><i class="fas fa-shoe-prints mr-3"></i>This is the Footer</h5>
            </div>
          </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>