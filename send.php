<?php
if(isset($_POST['submit']))
{
    $em=$_POST['em'];
    $to="rvimal358@gmail.com";
    $header="From $to";
    $check=mail($em,"PHLOX","There are many variations passages of Lorem Ipsum available, but the majority have",$header);
    if($check)
    {
        echo "<script>window.alert('Email Send')</script>";
    }
    else
    {
        echo "<script>window.alert('Email Not Send')</script>";
    }
    header('location:shop.php');
}
?>