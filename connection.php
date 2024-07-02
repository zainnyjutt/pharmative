<?php
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cnic=$_POST['cnic'];


$l="localhost";
$r="root";
$p="";
$d="pharmative";


$m=mysqli_connect($l,$r,$p,$d);



$i="INSERT INTO `userdata`(`fname`, `email`, `password`, `cnic`) values('$fname','$email','$password','$cnic')";

$n=mysqli_query($m,$i);
if($n){  header("Location:dosra.php");}
else{ header("Location:invalid.php");}
	






?>