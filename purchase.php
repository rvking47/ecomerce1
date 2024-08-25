<?php
session_start();
$col=mysqli_connect('localhost','root','','ecomerce');
if(mysqli_connect_error())
{
    echo "<script>alert('Connot Connect To Database');
    window.location.href='cart.php';</script>";
    exit();
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['submit']))
  {
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $pn=$_POST['pn'];
    $add=$_POST['add'];
    $pin=$_POST['pin'];
    $cas=$_POST['cas'];
    $query="insert into order_manager(`First_Name`,`Last_Name`,`Phone_Number`,`Address`,`Pin_Code`,`Pay_Mode`) values('$fn','$ln','$pn','$add','$pin','$cas')";
    $data=mysqli_query($col,$query);
    if($data){
        $Order_Id=mysqli_insert_id($col);
    $query1="insert into user_order(`Order_Id`,`Item_Name`,`Price`,`Quantity`) values (?,?,?,?)";
    $stmt=mysqli_prepare($col,$query1); 
    if($stmt)
    {
      mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
      foreach($_SESSION['cart'] as $key => $values)
      {
        $Item_Name=$values['item_name'];
        $Price=$values['price'];
        $Quantity=$values['qty'];
        mysqli_stmt_execute($stmt);
      }
      unset($_SESSION['cart']);
      echo "<script>alert('Order Placed');
      window.location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert('SQL Prepare Error');
        window.location.href='cart.php';</script>";
    }
    }
    else
    {
        echo "<script>alert('SQL Error');
        window.location.href='cart.php';</script>";
    }
}
}