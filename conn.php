<?php
$col=mysqli_connect('localhost','root','','ecomerce');
if($col)
{
    echo "Connection";
}
else{
    echo "Not";
}

$em=$_POST['em'];
$pn=$_POST['pn'];
$mess=$_POST['mess'];

$query="insert into contact values('$em','$pn','$mess')";

$data=mysqli_query($col,$query);

if($data)
{
    echo "<script>alert('Message Send');
    window.location.href='contactus.php';</script>";
}
else
{
    echo "<script>alert('Message Not Send');
    window.location.href='contactus.php';</script>";
}
?>