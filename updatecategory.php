<html>
<head>

<title>Update Category</title>
<link rel="stylesheet" href="stylemedicine.css">
</head>


<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";

$id=$_GET['id'];

$link=mysqli_connect($l,$r,$p,$d);

	 $s="select * from category where id='$id'";
	 $q=mysqli_query($link,$s);
	 while($row=mysqli_fetch_array($q)){
		 	$id=$row['id'];
			$company=$row['company'];
            $category=$row['category'];
         
			}
			?>




<body>

<form method="POST" action="updatecategory2.php">

<div class="medicine-box">
<h2>Update Category</h2>

<div class="textbox2">
<i class="fa fa-plus-square" aria-hidden="true"></i>
<input type="hidden" placeholder="Company Name" name="id" value="<?php echo $id ;?>" style="color:white; width:80%; height:25px; font-size:18px; background:none; border:none;">
<input type="text" placeholder="Company Name" name="company" value="<?php echo $company ;?>" style="color:white; width:80%; height:25px; font-size:18px; background:none; border:none;">
</div>





<div class="textbox2">
<i class="fa fa-plus-square" aria-hidden="true"></i>
<input type="text" placeholder="Category Name" id="in" name="category" value="<?php echo $category ;?>" style="color:white; width:80%; height:25px; font-size:18px;">
</div>

<input class="btn" type="submit" name="btn" value="Update Category" style="width:100%;">	
 

</div>

</form>
</body>

</html>