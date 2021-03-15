<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Register</title>
    <script>
        
        $(document).ready(function () {
         $flag = 1;
  
        $("#name").focusout(function () {
       if ($(this).val() == '') {
           $(this).css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_name").text("Enter your  name!");
       } else {
           $(this).css("border-color", "#2eb82e");
           $('#submit').attr('disabled', false);
           $("#error_name").text("");

       }
      });
  
   

     function validateEmail(sEmail) {
       var filter = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/;
       if (filter.test(sEmail)) {
           return true;
       } else {
           return false;
       }
     }
    $("#email").focusout(function () {
       var sEmail = $('#email').val();
       if ($.trim(sEmail).length == 0) {
           $(this).css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_email").text("Please enter valid email address");

           e.preventDefault();
       }
       if (validateEmail(sEmail)) {
           $(this).css("border-color", "#2eb82e");
           $('#submit').attr('disabled', false);
           $("#error_email").text("");;
       } else {
           $(this).css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_email").text("Invalid email address");
           e.preventDefault();
       }
    });
   
    $("#password").focusout(function () {
       if ($(this).val() == '') {
           $(this).css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_password").text("* You have to enter your Password!");
       } else {
           $(this).css("border-color", "#2eb82e");
           $('#submit').attr('disabled', false);
           $("#error_password").text("");
       }
    });
    $("#confirm").focusout(function () {
       if ($("#confirm").val() !== $("#password").val()) {
           $("#confirm").css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_confirm").text("Passwords Do not match!");
       } else {
           $(this).css("border-color", "#2eb82e");
           $('#submit').attr('disabled', false);
           $("#error_confirm").text("");
       }
    });

   
    $("#submit").click(function () {
       if ($("#name").val() == '') {
           $("#name").css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_name").text("*  Enter your name!");
       }
       
       if ($("#email").val() == '') {
           $("#email").css("border-color", "#FF0000");
           $('#submit').attr('disabled', true);
           $("#error_email").text("* Enter your Email  !");
       }
       
       if ($("#password").val() == '') {
           $("#password").css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_password").text("Enter a Password");
       }
       if ($("#confirm").val() == '') {
           $("#confirm").css("border-color", "#cd2d00");
           $('#submit').attr('disabled', true);
           $("#error_confirm").text("Confirm Password");
       }
   
    });

    });
   </script>
</head>

 <body>
    <header class="bg-info" >
        <div class="row text-white">
            <div class="col-md-6 col-6 p-3 pl-4">
              <img src="assets/images/logo.jfif" height="100" width="100" alt="">
            </div>
          <div class="col-md-6 col-6  my-auto ">
            <nav class="navbar navbar-expand-lg navbar-light">
                   
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                
             </nav>
            </div>
        </div>
  
    </header>
      
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h2 class="text-center text-white pt-5">Register</h2>

                <form  method="post" action="register.php">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Name</label>
                          <input type="text" class="form-control" name="name"  id="name"  data-validation="required" maxlength='30'/>
                        <span id="error_name" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Email</label>
                                <input type="text" class="form-control" name="email"  id="email"  data-validation="required" maxlength='30'/>
                                 <span id="error_email" class="text-danger"></span>
                    </div>

                   

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        
                                
                                <input type="password" class="form-control" name="password"  id="password" data-validation="required" maxlength='6' />
                         
                        <span id="error_password" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                         <input type="password" class="form-control" name="confirm"  id="confirm"  data-validation="required" maxlength='6'/>
                         <span id="error_confirm" class="text-danger"></span>
                     </div>
                     
                     <div class="form-group ">
                        
                        <input type="submit" value="Submit" id="submit" name="submit" class="btn btn-primary center"/>
                        <span id="error_submit" class="text-danger"></span>
                     </div>
                        
                     <div id="login-link" class="text-center">
                        <a href="login.php" class="text-info">Sign In</a>
                        <hr class="my-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
   

    <?php
    include("Db.php");
    date_default_timezone_set( 'Asia/Kolkata' );
    $timee = date( 'h:i:s' );
    $datee = date('d/m/Y');
    if(isset($_POST['submit']))
    {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $confpass   = $_POST['confirm'];
      
        $qry1="INSERT INTO `register`(`Name`, `Email`, `Password`, `ConfirmPassword`, `EnteredOn`, `Entered Time`) 
                VALUES ('$name','$email','$password','$confpass','$datee','$timee')";
        
        $success = mysqli_query($conn,$qry1);
        if ($success)
        {
            ?>
            <script>
                alert("Registration Successful");
                window.location.assign('login.php');
                session_start();
                $_SESSION["user_logined"] =true;
               // header("Location: ../home.html"); 

                exit;
               
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Registration Failed");
                window.location.assign('register.php');
            </script>
            <?php
        }
    }
    ?>
 </body>
</html>