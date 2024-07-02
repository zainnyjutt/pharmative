

<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";

$id=$_POST['id'];

$link=mysqli_connect($l,$r,$p,$d);

$company=$_POST['company'];
$category=$_POST['category'];






$q="UPDATE category SET company='$company',category='$category' WHERE id='$id' ";

mysqli_query($link,$q);

header("Location:viewcategory.php");

?>