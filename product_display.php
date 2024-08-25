<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
tr {
  font-family: "Playfair Display", system-ui;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;
}
h2 {
  font-family: "Playfair Display", system-ui;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;
  margin-top: -20px;
  padding-bottom: 20px;
}
span{
    color: red;
}
table{
    margin: auto;
}

</style>
</head>

<?php
$col=mysqli_connect('localhost','root','','ecomerce');

$query="select * from order_manager";

$data=mysqli_query($col,$query);

echo "<div class='jumbotron'>";

echo "<div class='row'>";
echo "<div class='col-md-12 col-lg-12 col-sm-12'>";
echo "<h2 class='text-center'>Product_Order_Data <span>*</spna></h2>";
echo "</div>";

echo "</div>";

echo "<div class='row'>";
echo "<div class='col-md-12 col-lg-12 col-sm-12'>";


echo "<table class='table table-bordered table-responsive'>";


echo "<thead class='bg-light text-center'><tr><th>Order_Id <span>*</spna></th><th>First_Name <span>*</spna></th><th>Last_Name <span>*</spna></th><th>Phone_Number <span>*</spna></th><th>Address <span>*</spna></th><th>Pin_Code <span>*</spna></th><th>Pay_Mode <span>*</spna></th><th>User_Order <span>*</spna></th><th>Action <span>*</spna></th></tr></thead>";

while($row=mysqli_fetch_array($data))
{
    echo "<tbody class='bg-light'>";
    echo "<tr>";
    echo "<td>".$row['Order_Id']."</td>";
    echo "<td>".$row['First_Name']."</td>";
    echo "<td>".$row['Last_Name']."</td>";
    echo "<td>".$row['Phone_Number']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['Pin_Code']."</td>";
    echo "<td>".$row['Pay_Mode']."</td>";
    echo "<td>";

    echo "<table class='table table-bordered '>";
echo "<thead class='bg-light text-center'><tr><th>Item_Name <span>*</spna></th><th>Price <span>*</spna></th><th>Quanitity <span>*</spna></th></tr></thead>";
    
echo "<tbody>";
$query1="select * from user_order where Order_Id='$row[Order_Id]'";
$data1=mysqli_query($col,$query1);
while($row1=mysqli_fetch_array($data1))
{
echo "<tr>";
echo "<td>".$row1['Item_Name']."</td>";
echo "<td>".$row1['Price']."</td>";
echo "<td>".$row1['Quantity']."</td>";
echo "</tbody>";
echo "</tr>";
}
    echo "</table>";
    "</td>";
    echo "<td><a href='product_delete.php?id=$row[Order_Id]' class='btn btn-danger'>Remove</a>  <a href='product_edit.php?id=$row[Order_Id]' class='btn btn-success'>Edit</a></td>";
    echo "</div>";
    echo "</tbody>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";


?>