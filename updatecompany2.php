<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";

$id=$_POST['id'];

$link=mysqli_connect($l,$r,$p,$d);

$cname=$_POST['cname'];







$q="UPDATE `company` SET `company`='$cname' WHERE id='$id' ";

mysqli_query($link,$q);

header("Location:viewcompany.php");

?>