<html>
<head>
<title>Transparent mfg Forms</title>
<link rel="stylesheet" href="stylemfg.css">
</head>

<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";

$id=$_GET['id'];

$link=mysqli_connect($l,$r,$p,$d);

	 $s="select * from company where id='$id'";
	 $q=mysqli_query($link,$s);
	 while($row=mysqli_fetch_array($q)){
		 	$id=$row['id'];
			$cname=$row['company'];
           

			}
			?>






<body>
<form method="POST" action="updatecompany2.php">
<div class="mfg-box">
<h1>Update Company</h2>
<div class="textbox">
<i class="fa fa-building-o" aria-hidden="true"></i>
<input type="textbox" value="<?php echo $cname; ?>" placeholder="Company Name" name="cname"/>
<input type="hidden" value="<?php echo $id; ?>" name="id"  placeholder="Company Name"/>

</div>

<input class="btn" type="submit" name="btn" value="Update Company" style="width:100%;"/> 

</div>
</form>
</body>

</html>