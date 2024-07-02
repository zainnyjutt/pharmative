<?php
$page='stock';

?>

<html>
<head>
<title>
 Stock
</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:white;">

<?php
include('menu.php');
?>
	<div style="border-top:2px solid #438000;"></div></br>
	
	


<!-- short Card 1-->
<div  class="row" style="padding-left:90px;">
    <div  class="col" style="background-color:white">
	  <div  class="card" style="width:200px; height:80px;">
        
         <div style="border:1px solid #438000;  padding-top:10px;" class="card-body">
          <h3 style="color:black;"><?php $l="localhost";
                    $r="root";
                    $p="";
                    $d="pharmative";


                    $link=mysqli_connect($l,$r,$p,$d);									
                    $com="SELECT count(company) FROM `company`";
				    $t=mysqli_query($link,$com);
					
						while($row=mysqli_fetch_array($t)){	echo $row[0];		 
						}
					
									 
					?></h3>
					<h4 style="font-size:20px; padding-bottom:100px;">Total Companies</h4>
        
           
         </div>
      </div>
	</div>
	<!-- short Card 2-->

	   <div  class="col" style="background-color:white">
	  <div  class="card" style="width:200px; height:80px;">
        
        <div style="border:1px solid #438000;  padding-top:10px;" class="card-body">
          <h3 style="color:black;"><?php $l="localhost";
                    $r="root";
                    $p="";
                    $d="pharmative";


                    $link=mysqli_connect($l,$r,$p,$d);									
                    $com="SELECT count(category) FROM `category`";
				    $t=mysqli_query($link,$com);
					
						while($row=mysqli_fetch_array($t)){	echo $row[0];		 
						}
					
									 
					?></h3>
					<h4 style="font-size:20px; padding-bottom:100px;">Total Categories</h4>
        
            <!--<a href="company.php" class="btn btn-primary stretched-link" style="background-color:#438000; border:none;">total</a>-->
         </div>
      </div>
	</div>
	
		<!-- short Card 3-->

	   <div  class="col" style="background-color:white">
	  <div  class="card" style="width:200px; height:80px;">
        
         <div style="border:1px solid #438000;  padding-top:10px;" class="card-body">
          <h3 style="color:black;"><?php $l="localhost";
                    $r="root";
                    $p="";
                    $d="pharmative";


                    $link=mysqli_connect($l,$r,$p,$d);									
                    $com="SELECT count(id) FROM `medicine`";
				    $t=mysqli_query($link,$com);
					
						while($row=mysqli_fetch_array($t)){	echo $row[0];		 
						}
					
									 
					?></h3>
					<h4 style="font-size:20px; padding-bottom:100px;">Total Medicine</h4>
        
            <!--<a href="company.php" class="btn btn-primary stretched-link" style="background-color:#438000; border:none;">total</a>-->
         </div>
      </div>
	</div>
	
</div>
<br>

<!-- short Card 4 -->
<div  class="row" style="padding-left:90px;">
    <div  style="padding-left:155px;">
	<div  class="col" style="background-color:white">
	  <div  class="card" style="width:200px; height:80px;">
        
      <div style="border:1px solid red;  padding-top:10px;" class="card-body">
          <h3 style="color:black;"><?php $l="localhost";
                    $r="root";
                    $p="";
                    $d="pharmative";


                    $link=mysqli_connect($l,$r,$p,$d);									
                    $com="SELECT count(expiry) FROM `medicine` WHERE expiry<CURRENT_TIMESTAMP";
				    $t=mysqli_query($link,$com);
					
						while($row=mysqli_fetch_array($t)){	echo $row[0];		 
						}
					
									 
					?></h3>
					<h4 style="font-size:20px; padding-bottom:100px;">Expired</h4>
        
            <!--<a href="company.php" class="btn btn-primary stretched-link" style="background-color:#438000; border:none;">total</a>-->
         </div>
      </div>
	</div>
	</div>
<!-- short Card 5-->
<div  style="padding-left:90px;">
 <div  class="col" style="background-color:white">
 
	  <div  class="card" style="width:200px; height:80px;">
        
          <div style="border:1px solid blue;  padding-top:10px;" class="card-body">
          <h3 style="color:black;"><?php $l="localhost";
                    $r="root";
                    $p="";
                    $d="pharmative";


                    $link=mysqli_connect($l,$r,$p,$d);									
                    $com="SELECT count(id) FROM `medicine` WHERE stock<2";
				    $t=mysqli_query($link,$com);
					
						while($row=mysqli_fetch_array($t)){	echo $row[0];		 
						}
					
									 
					?></h3>
					<h4 style="font-size:20px; padding-bottom:100px;">Out Of Stock</h4>
        
            <!--<a href="company.php" class="btn btn-primary stretched-link" style="background-color:#438000; border:none;">total</a>-->
         </div>
      </div>
	</div>
	</div>
	
</div>
</br>
<div style="border-top:1px solid #438000;"></div><br>





<!-- Add company Card-->
<div  class="row" style="padding-left:90px;">
    <div  class="col" style="background-color:white">
	  <div  class="card" style="width:200px;">
        <img style="border-top:1px solid #438000; border-left:1px solid #438000; border-right:1px solid #438000; "  class="card-img-top" src="images/companyicon.png" alt="Card image" style="width:100%">
         <div style="border:1px solid #438000; border-top:none;" class="card-body">
          <h4 class="card-title">Add Company</h4>
            <a href="company.php" class="btn btn-primary stretched-link" style="background-color:#438000; border:none;">Add Company</a>
         </div>
      </div>
	</div>

<!-- Add category Card-->

    <div  class="col" style="background-color:white">
	  <div  class="card" style="width:200px;">
        <img style="border-top:1px solid #438000; border-left:1px solid #438000; border-right:1px solid #438000; "  class="card-img-top" src="images/categoryicon.png" alt="Card image" style="width:100%">
         <div style="border:1px solid #438000; border-top:none;" class="card-body">
          <h4 class="card-title">Add Category</h4>
            <a href="category.php" class="btn btn-primary stretched-link" style="background-color:#438000; border:none;">Add Category</a>
         </div>
      </div>
	</div>

<!-- Add medicine Card-->

    <div  class="col" style="background-color:white">
	  <div  class="card" style="width:200px;">
        <img style="border-top:1px solid #438000; border-left:1px solid #438000; border-right:1px solid #438000; "  class="card-img-top" src="images/medicineicon.png" alt="Card image" style="width:100%">
         <div style="border:1px solid #438000; border-top:none;" class="card-body">
          <h4 class="card-title">Add Medicine</h4>
            <a href="addmedicine.php" class="btn btn-primary stretched-link" style="background-color:#438000; border:none;">Add Medicine</a>
         </div>
      </div>
	</div>
</div>



<br>

<?php
include('footer.php');
?>


</body>
</html>
