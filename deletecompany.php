<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";

$id=$_GET['id'];

$link=mysqli_connect($l,$r,$p,$d);

$q="DELETE FROM company WHERE id='$id' ";





mysqli_query($link,$q);

header("Location:viewcompany.php");
?>