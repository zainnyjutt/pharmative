<html>
<head>
<title>Update Medicine</title>

<style>
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
	background-image:url(images\viewbackground.jpg);
}
</style>
</head>
<body style="background-image:url(pexels-alex-green-5699507.jpg); background-attachment:fixed; background-size:cover;">
<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";

$id=$_GET['id'];

$link=mysqli_connect($l,$r,$p,$d);

	 $s="select * from medicine where id='$id'";
	 $q=mysqli_query($link,$s);
	 while($row=mysqli_fetch_array($q)){
		 	$id=$row['id'];
			$cname=$row['companyname'];
			$catname=$row['categoryname'];
            $mname=$row['medicinename'];
            $unit=$row['unit'];
            $expiry=$row['expiry'];
            $stock=$row['stock'];
            $price=$row['price'];

			}
			?>





<form method="POST" action="updatemedicine2.php">
<div class="add-box">

<div class="textbox2" style="background:rgba(0,0,0,0.9); outline:none; top:50%; left:50%; transform:translate(-50%,-50%); position:absolute; color:white; padding:25px; font-size:18px; border-radius:30px;">
<h2 align="center">Update Medicine</h2>
<i class="fa fa-building-o" aria-hidden="true" style="padding-left:10px;"></i>
<input type="hidden" name="id" value="<?php echo $id ;?>"  class="textbox5" style=" padding-left:10px; background:none; border-bottom:1px solid green; color:white; border-top:none; border-left:none; border-right:none; height:40px; width:80%; font-size:18px; outline:none;  "/>
<input type="textbox" value="<?php echo $cname; ?>" name="cname" id="nb2" class="textbox5" style=" padding-left:10px; background:none; border-bottom:1px solid green; color:white; border-top:none; border-left:none; border-right:none; height:40px; width:80%; font-size:18px; outline:none;  "/>

	









<div class="textbox2">
<i class="fa fa-plus-square" aria-hidden="true"style="padding-left:10px;"></i>

<input type="textbox" value="<?php echo $mname; ?>" name="mname" id="nb2" class="textbox5" style=" padding-left:10px; background:none; border-bottom:1px solid green; color:white; border-top:none; border-left:none; border-right:none; height:40px; width:80%; font-size:18px; outline:none; ";>

</input>
</div>

<div class="textbox2">
<i class="fa fa-tachometer" aria-hidden="true" style="padding-left:10px;"></i>

<input type="textbox" value="<?php echo $unit; ?>" name="unit" id="nb2" class="textbox5" style=" padding-left:10px; background:none; border-bottom:1px solid green; color:white; border-top:none; border-left:none; border-right:none; height:40px; width:80%; font-size:18px; outline:none; ";>

</input>
</div>


<div class="textbox2">
<i class="fa fa-calendar-times-o" aria-hidden="true" style="padding-left:10px;"></i>

<input type="textbox" value="(Expiry)  <?php echo $expiry; ?> " name="expiry" id="input" style="  padding-left:10px; background:none; border-bottom:1px solid green; color:white; border-top:none; border-left:none; border-right:none; height:40px; width:80%; font-size:18px; outline:none; " />

</div>

<div>
<i class="fa fa-area-chart" aria-hidden="true" style="padding-left:10px;"></i>
<input type="text" placeholder="Quantity" value="<?php echo $stock; ?>" name="stock" style=" padding-left:5px; width:80%; background:none; border:none; font-size:18px; border-bottom:1px solid #438000; height:40px; outline:none; color:black;  color:white;"/>
</div>
<div class="textbox2">
<i class="fa fa-money" aria-hidden="true" style="padding-left:10px;"></i>
<input type="textbox" value="<?php echo $price; ?>" name="price" style=" padding-left:10px; background:none; border-bottom:1px solid green; color:white; border-top:none; border-left:none; border-right:none; height:40px; width:80%; font-size:18px; outline:none; ">
</div>



<a><input class="btn" type="submit" name="btn" value="Update Medicine" style=" padding-left:10px; width:100%; margin-top:5%; height:40px; font-size:18px; border-radius:50px; cursor:pointer; background:#438000;"></a>


</div>

</form>
</body>

</html>