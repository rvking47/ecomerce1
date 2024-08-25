<?php
require("admin_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .container{
    display: flex;
    place-items: center;
    justify-content: center;
  }
  .bi{
    margin-top: 10%;
  }
  h2{
    font-style: oblique;
  }
  label{
    font-style: oblique;
  }
  input{
    font-style: oblique;
  }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-6 bi">
        <div class="jumbotron">
            <h2 class="text-center">Admin_Login</h2>
            <form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'])  ?>">
                <div class="form-group">
                    <label for="" class="form-label">Username:</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter Your Username" name="user">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password:</label>
                    <input type="text" name="pass" class="form-control" placeholder="Enter Your Password" name="pass">
                </div>
                <input type="submit" name="submit" class="btn btn-info" value="Login">
            </form>
        </div>
        </div>
    </div>
    <?php

    function input_filter($data)
    {
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
   if(isset($_POST['submit']))
   {
    $user=input_filter($_POST['user']);
    $pass=input_filter($_POST['pass']);

    $user=mysqli_real_escape_string($col,$user);
    $pass=mysqli_real_escape_string($col,$pass);

    $query="select * from `admin_login` where `username`=? AND `pass`=?";

    if($stmt=mysqli_prepare($col,$query))
    {
      mysqli_stmt_bind_param($stmt,"ss",$user,$pass);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      if(mysqli_stmt_num_rows($stmt)==1)
      {
       session_start();
         $_SESSION['adminloginId']=$user;
         header('location: admin_connect.php');
      }
      else{
        echo "<script>alert('Invalid Admin UserName or Password');</script>";
      }
      mysqli_stmt_close($stmt);
    }
    else{
      echo "<script>alert('SQL Query cannot be prepared')</script>";
    }

   }

?>
</body>
</html>