<html>
<head>
<title>View Company</title>
</head>
<body >


<?php

include('menu.php');

?>
</br>


<?php




$l="localhost";
$r="root";
$p="";
$d="pharmative";

$m=mysqli_connect($l,$r,$p,$d);


$q="select * from company";
$q2="select count(id) from medicine";
$n=mysqli_query($m,$q);
$n2=mysqli_query($m,$q2);

echo "<table align='center' border='1px ' id='table' style='width:80%; height:250px; '>";
echo "<tr style='height:30px; font-size:20px;'>";
echo "<th>"."Sr.No"."</th>";
echo "<th>"."Company Name"."</th>";
echo "<th>"."Update Data"."</th>";
echo "<th>"."Delete Data"."</th>";

echo "</tr>";



$o2=mysqli_fetch_array($n2);
$r=1;

while($o=mysqli_fetch_array($n)){
	$id=$o['id'];
	echo "<tr align='center'>";
	echo "<td>".$r."</td>";
	
	echo "<td>".$o['company']."</td>";
	echo "<td>"."<a  href='updatecompany.php?id=$id'>"."<input type='submit' value='Update' style='width:100%; height:50px; background:green; color:white;  cursor:pointer; font-size:18px; border:none;'"."</a>"."</td>";
	echo "<td>"."<a href='deletecompany.php?id=$id'>"."<input type='submit' value='Delete' style='width:100%; height:50px; background:red; color:white; cursor:pointer; font-size:18px; border:none;'"."</a>"."</td>";


	echo "</tr>";
	$r++;
}
echo "</table>";	
?>



<br><br>

<?php

include('footer.php');

?>



</body>
</html>