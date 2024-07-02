<html>
<head>
<title>View Medicine</title>


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


$q="select * from medicine";
$q2="select count(id) from medicine";
$n=mysqli_query($m,$q);
$n2=mysqli_query($m,$q2);

echo "<table align='center' border='1px ' id='table' style='width:80%; height:250px; '>";
echo "<tr style='height:30px; font-size:14px;'>";
echo "<th>"."Sr.No"."</th>";
echo "<th>"."Company Name"."</th>";
echo "<th>"."Category Name"."</th>";
echo "<th>"."Medicine Name"."</th>";
echo "<th>"."Unit"."</th>";
echo "<th>"."Expiry Date"."</th>";
echo "<th>"."Stock"."</th>";
echo "<th>"."Price"."</th>";
echo "<th>"."Update Data"."</th>";
echo "<th>"."Delete Data"."</th>";
echo "</tr>";



$o2=mysqli_fetch_array($n2);
$r=1;
while($o=mysqli_fetch_array($n)){


	
    $id=$o['id'];
	
	echo "<tr align='center'>";
	echo "<td>".$r."</td>";
	
	echo "<td>".$o['companyname']."</td>";
	echo "<td>".$o['categoryname']."</td>";
	echo "<td>".$o['medicinename']."</td>";
    echo "<td>".$o['unit']."</td>";
	echo "<td>".$o['expiry']."</td>";
	echo "<td>".$o['stock']."</td>";
	echo "<td>".$o['price']."</td>";
	echo "<td>"."<a href='updatemedicine.php?id=$id'>"."<input type='submit' value='Update' style='width:100%; height:50px; background:green; color:white;  cursor:pointer; font-size:18px; border:none;'"."</a>"."</td>";
	echo "<td>"."<a href='deletemedicine.php?id=$id'>"."<input type='submit' value='Delete' style='width:100%; height:50px; background:red; color:white; cursor:pointer; font-size:18px; border:none;'"."</a>"."</td>";
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