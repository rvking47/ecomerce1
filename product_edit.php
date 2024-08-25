<?php
$col=mysqli_connect('localhost','root','','ecomerce');

$id=$_GET['id'];
$query="select * from order_manager where Order_Id=$id";

$data=mysqli_query($col,$query);

while($row=mysqli_fetch_array($data))
{
    $od=$row['Order_Id'];
    $fn=$row['First_Name'];
    $ln=$row['Last_Name'];
    $pn=$row['Phone_Number'];
    $add=$row['Address'];
    $pc=$row['Pin_Code'];
    $pm=$row['Pay_Mode'];


}

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
  @import url('https://fonts.googleapis.com/css2?family=New+Amsterdam&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
   span{
    color: red;
   }
   label{
    font-family: "Playfair Display", serif;
  font-optical-sizing: auto;
   }
   h2 {
    font-family: "Playfair Display", serif;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;
   }
  input[type="submit"]
  {
    font-family: "Playfair Display", serif;
  }
  ::placeholder{
    font-family: "Playfair Display", serif;
  }
  .jumbotron{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
  }
    </style>
</head>
<body>
    <div class="container">
        <div class="jumbotron my-5">
            <h2><span1 style="text-decoration: underline red 2px;">Product Order</span1> Edit</h2>
    <form method="post">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="form-group">
            <label for="" class="form-label">Order_Id <span>*<span></label>
            <input type="text" name="od" class="form-control" placeholder="Enter Id" value=<?php echo $od ?>>
        </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="form-group">
        <label for="" class="form-label">First_Name <span>*<span></label>
         <input type="text" name="fn" class="form-control" placeholder="Enter Your Name" value=<?php echo $fn ?>>
        </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="form-group">
        <label for="" class="form-label">Last_Name <span>*<span></label>
        <input type="text" name="ln" class="form-control" placeholder="Enter Your Address" value=<?php echo $ln ?>>
        </div>
        </div>
            <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="form-group">
        <label for="" class="form-label">Phone_Number <span>*<span></label>
         <input type="text" class="form-control" name="pn" placeholder="Enter Your Percentage" value=<?php echo $pn ?>>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="form-group">
        <label for="" class="form-label">Address <span>*<span></label>
         <input type="text" class="form-control" name="add" placeholder="Enter Your Percentage" value=<?php echo $add ?>>
        </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="form-group">
        <label for="" class="form-label">Pin_Code <span>*<span></label>
         <input type="text" class="form-control" name="pc" placeholder="Enter Your Percentage" value=<?php echo $pc ?>>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="form-group">
        <label for="" class="form-label">Pay_Mode <span>*<span></label>
         <input type="text" class="form-control" name="pm" placeholder="Enter Your Percentage" value=<?php echo $pm ?>>
        </div>
        </div>
       
        </div>
      
      <input type="submit" class="btn btn-primary" name="submit" value="Update">
    </form>
    </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
 $od=$_POST['od'];
 $fn=$_POST['fn'];
 $ln=$_POST['ln'];
 $pn=$_POST['pn'];
 $add=$_POST['add'];
 $pc=$_POST['pc'];
 $pm=$_POST['pm'];
 
 $query="update order_manager set First_Name='$fn', Last_Name='$ln', Phone_Number='$pn', Address='$add', Pin_Code='$pc', Pay_Mode='$pm' where Order_Id=$od";

 $data=mysqli_query($col,$query);

 if($data)
 {
    echo "<script>
    alert('Prdocut_Order_Data Updated');
    window.location.href='product_display.php';</script>";
 }
}

?>