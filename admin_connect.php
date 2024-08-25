<?php
session_start();
if(!isset($_SESSION['adminloginId']))
{
  header('location:admin_login');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Panel - <?php echo $_SESSION['adminloginId'] ?> </h1>
</body>
</html>