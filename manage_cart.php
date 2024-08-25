<?php

session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
if(isset($_POST['Add_To_Cart']))
{
  if(isset($_SESSION['cart']))
  {
     $myitmes=array_column($_SESSION['cart'],'item_name');

     if(in_array($_POST['item_name'],$myitmes))
     {
        echo "<script>alert('Item Already Added');
        window.location.href='shop.php';</script>";
     }
     else{
    $count=count($_SESSION['cart']);
    $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'qty'=>1);
     echo "<script>alert('Item Added');
    window.location.href='shop.php';</script>";
  }
}
  else{
    $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'qty'=>1);
    echo "<script>alert('Item Added');
    window.location.href='shop.php';</script>";
  }
}
if(isset($_POST['remove']))
{
    foreach($_SESSION['cart'] as $key => $value)
    {
        if($value['item_name']==$_POST['item_name'])
        {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo "<script>alert('item remove');
         window.location.href='cart.php';</script>";
        }
    }
}

if(isset($_POST['Mod_Qty']))
{
  foreach($_SESSION['cart'] as $key => $value)
  {
      if($value['item_name']==$_POST['item_name'])
      {
        $_SESSION['cart'][$key]['qty']=$_POST['Mod_Qty'];
      echo "<script>
       window.location.href='cart.php';</script>";
      }
  } 
}
}

?>