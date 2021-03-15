<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view news</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   <style>
      .coldate{
        width: 165px;
      }
    </style>
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
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="./logout.php">logout <span class="sr-only"></span></a>
                          </li>
                         
                      </li>
                     </ul>
                    
                  </div>
                </nav>
            </div>
  
          </div>
     </header>
    
                      
                    
      <div class="table-responsive">
        <table class="table table-bordered ">
          <thead>
            <tr>
              <th scope="col ">No</th>
              <th scope="col">News Category</th>
              <th scope="col">News Title</th>
              <th scope="col">News</th>
              <th scope="col">Image</th>
              <th scope="col">Trending News</th>
              <th scope="col">Featured News</th>
              <th scope="col">News Date</th>
            </tr>
          </thead>

          <?php
          include("Db.php");

                  $qry = "SELECT * FROM `news`";
                  $success = mysqli_query($conn,$qry);
                //   if($result->num_rows > 0){
                  $count=1;
                  while($row=mysqli_fetch_array($success))
                  {
                ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $count; ?></th>
              <td><?php echo $row['News_Category']; ?></td>
              <td><b><?php echo $row['News_Titile']; ?></b></td>
              <td><?php echo $row['News_Content']; ?></td>             
              <td><img src="<?php echo $row['Upload_Image']; ?>" width="50" height="50" ></td>
              <td><?php echo $row['Show_Trending']; ?></td>
              <td><?php echo $row['Show_Featured']; ?></td>
              <td><?php echo $row['Enterd_On']; ?></td>
              
            </tr>
            <?php
            $count++;
                  }
                  ?>
          </tbody>
        </table>
      </div>
      
     

         
      <script src=" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
</html>