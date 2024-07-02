<?php

$cname=$_POST['cname'];

$servername="localhost";
$username="root";
$password="";
$databasename="pharmative";
 $link=mysqli_connect($servername,$username,$password,$databasename);

$q="INSERT INTO company(company) VALUES ('$cname')";

mysqli_query($link,$q);

header("Location:category.php");



?>