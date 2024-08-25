<?php
$col=mysqli_connect('localhost','root','','ecomerce');

$id=$_GET['id'];

$query="delete from order_manager where Order_Id=$id";

$data=mysqli_query($col,$query);

if($data)
{
    echo "<script>alert('Product_Order_Data Delete');
    window.location.href='product_display.php';</script>";
}
?>