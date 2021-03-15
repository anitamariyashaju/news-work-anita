<?php
include("Db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <header class="bg-info" >
      <div class="row text-white">
          <div class="col-md-6 col-6 p-3 pl-5">
            <img src="assets/images/logo.jfif" height="100" width="100" alt="">
          </div>
          <div class="col-md-6 col-6  my-auto ">
            <nav class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="addnews.php">Add News <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="view.php">View News</a>
                </li>
                
              </ul>  
              </div>
          </nav>
     </div>
      </div>


    </header>

    
   <section>
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images\news1.jfif" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images\news2.jfif" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 " src="assets/images\news3.jpg" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images\news4.jfif" alt="">
                          </div>
                
                          
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>  
                </div>
            </div>
        </div>
    </section>
    

    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
</html>
