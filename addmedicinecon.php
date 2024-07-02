<?php



$cname=$_POST['cname'];
$catname=$_POST['catname'];
$mname=$_POST['mname'];
$unit=$_POST['unit'];
$expiry=$_POST['expiry'];
$stock=$_POST['stock'];
$price=$_POST['price'];



$l="localhost";
$r="root";
$p="";
$d="pharmative";


$m=mysqli_connect($l,$r,$p,$d);

$q="INSERT INTO medicine(companyname,categoryname,medicinename,unit,expiry,stock,price) VALUES ('$cname','$catname','$mname','$unit','$expiry','$stock','$price')";

$t=mysqli_query($m,$q);


 header("Location:index.php");




?>