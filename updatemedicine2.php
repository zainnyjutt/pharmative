

<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";

$id=$_POST['id'];

$link=mysqli_connect($l,$r,$p,$d);

$cname=$_POST['cname'];
$mname=$_POST['mname'];
$unit=$_POST['unit'];
$expiry=$_POST['expiry'];
$stock=$_POST['stock'];
$price=$_POST['price'];






$q="UPDATE `medicine` SET `companyname`='$cname',`medicinename`='$mname',`unit`='$unit',`stock`='$stock',`expiry`='$expiry',`price`='$price' WHERE id='$id' ";

mysqli_query($link,$q);

header("Location:viewmedicine.php");

?>