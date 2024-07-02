<?php
$cname=$_POST['cname'];
$mname=$_POST['mname'];


$l="localhost";
$r="root";
$p="";
$d="pharmative";


$m=mysqli_connect($l,$r,$p,$d);



$i="INSERT INTO category(company, category) values('$cname','$mname')";

$n=mysqli_query($m,$i);
while($data=mysqli_fetch_array($n))
{
	echo"<option value='$data[1]'>$data[1]</option>";
}


if($n){  header("Location:addmedicine.php");}
else {"Sorry";}
	

?>