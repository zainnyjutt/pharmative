<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";
$con=mysqli_connect($l,$r,$p,$d);
if(isset($_POST['input'])){
	


$input=$_POST['input'];






$sql="SELECT * FROM medicine WHERE categoryname LIKE '{$input}%'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){?>
<table class="table table-bordered table-striped mt-4">
<thead>
<tr>
<th>ID</th>
<th>Company</th>
<th>Catergory</th>
<th>Medicine</th>
<th>Unit</th>
<th>Expiry</th>
<th>Stock</th>
<th>Price</th>
<th>Sale</th>
</tr>
</thead>

<tbody>
        <?php
		while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$companyname=$row['companyname'];
		$categoryname=$row['categoryname'];
		$medicinename=$row['medicinename'];
		$unit=$row['unit'];
		$expiry=$row['expiry'];
		$stock=$row['stock'];
		$price=$row['price'];		
		?>


<tr>

  <td><?php echo $id;?></td>
  <td><?php echo $companyname;?></td>
  <td><?php echo $categoryname;?></td>
  <td><?php echo $medicinename;?></td>
  <td><?php echo $unit;?></td>
  <td><?php echo $expiry;?></td>
  <td><?php echo $stock;?></td>
  <td><?php echo $price;?></td>
  <td><?php  echo "<a href='bill.php?id=$id'>"."<input type='submit' value='SALE' style='width:100%; height:50px; background:green; color:white;  cursor:pointer; font-size:18px; border:none;'"."</a>"; ?></td>
</tr>


<?php
}
?>

</tbody>
</table>

<?php

	
}else{echo "<h3>"."NO DATA FOUND!!"."</h2>";}
}


?>