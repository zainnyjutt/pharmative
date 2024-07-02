



<html>
<head>

<title>Add Category</title>
<link rel="stylesheet" href="stylemedicine.css">
</head>
<body>

<form method="POST" action="medicineconnection.php">

<div class="medicine-box">
<h2>Medicine Category</h2>
<div class="textbox2">
<i class="fa fa-building-o" aria-hidden="true" style="padding-top:5%;"></i>
<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";


$link=mysqli_connect($l,$r,$p,$d);


        $sql = "SELECT * FROM company";
        $result = mysqli_query($link,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $selectedProduct[] = $row['company'];
            }
        }
    
 echo "<select  name='cname' id='nb' class='textbox3' style='background-color:rgba(0,0,0,0.4); color:white; width:80%; height:40px; border:none; font-size:18px; padding-top:5px; padding-left:9.5px;'>";
        foreach($selectedProduct as $optionName){
          echo "<option value=".$optionName.">".$optionName."</option>";
        }  
        echo "</select>";


?>
</div>



<div class="textbox2">
<i class="fa fa-plus-square" aria-hidden="true"></i>
<input type="text" placeholder="Category Name" id="in" name="mname" style="color:white; width:80%; height:25px; font-size:18px;"  required>
</div>

<a href="addmedicine.php" ><input class="btn" type="submit" name="btn" value="Add Category"></a>
 

</div>
</form>
</body>

</html>