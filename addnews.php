<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
      .Border{
        border: 1px solid black;
    padding: 10px 0px 8px 9px;
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
                       <a class="nav-link text-white" href="home.php">Home <span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link text-white" href="view.php">View News <span class="sr-only"></span></a>
                      </li>
                   </ul>
                    
               </div>
            </nav>
           </div>
           </div>
       </header> 
      <section>
        <div class="container">
           <form  method="POST" enctype="multipart/form-data" >
          <h1 class="text-center">A One News Report</h1>
                <div class="btn-group">
                   <div class="form-group" style="margin-right: 100px;"><br>
                    <label for="exampleFormControlSelect1">News Category</label>

                    <select name="newscategory" class="form-control" id="" >
                      <option value="general">General</option>
                      <option  value="Tourism">Tourism</option>
                      <option  value="Entertainment">Entertainment</option>
                      <option  value="career">career</option>
                      <option value="Others">Others</option>
                    </select>

                  </div>
                </div> 
              </div>

    </section>
       <br><br><br>
    <div class="container">
     
       <div class="form-group">
         <label for="exampleFormControlTextarea1"></label>
         <input type="text" maxlength="20" style="width: 400px;" placeholder="News Title" name="newstitle"><br><br>
        </div>
    
        <div class="form-group">
         <label for="exampleFormControlTextarea1"></label>
         <textarea class="form-control rounded-0" placeholder="News Content" rows="10" maxlength="300" name="newscontent"></textarea><br>
        </div>

         <div class="Border">
           <label>Upload Image:</label>
           <input type="file"  name="filename">
         </div> <br> 
  

        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="trending"> 
          <label class="form-check-label" for="flexCheckDefault"> show in trending</label>
        </div><br>
    
        <div class="form-check ">
          <input class="form-check-input" type="checkbox" name="featured" >
          <label class="form-check-label" for="flexCheckDefault">   show in featured </label>
        </div><br>
        <input type="submit" name="submit" value="submit"> &nbsp &nbsp &nbsp;<input type="Reset" value="Reset">
      </form>
        </div>  

        <?php
        include("Db.php");
        date_default_timezone_set( 'Asia/Kolkata' );
        $date = date( 'd/m/Y h:i:s' );
        if(isset($_POST["submit"]))
        {
        $news       = $_POST['newscategory'];
        $title      = $_POST['newstitle'];
        $content    = $_POST['newscontent'];
        $trend      = $_POST['trending'];
        $feature    = $_POST['featured'];
        $image      =$_FILES['filename']['name'];
        $temp       =$_FILES['filename']['tmp_name'];
        $dir        ="./img/".$image;
        move_uploaded_file($temp,$dir);
        $qry2="INSERT INTO `news`(`News_Category`, `News_Titile`, `News_Content`, `Upload_Image`, `Show_Trending`, `Show_Featured`, `Enterd_On`)
         VALUES ('$news','$title','$content','$dir','$trend','$feature','$date') ";
          $success = mysqli_query($conn,$qry2);
          if ($success)
          {
              ?>
              <script>
                  alert("submitted");
                  window.location.assign('addnews.php');
              </script>
              <?php
          }
          else
          {
              ?>
              <script>
                  alert("failed");
                  window.location.assign('addnews.php');
              </script>
              <?php
          }
      }
      ?>

        
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
   
   
  
 