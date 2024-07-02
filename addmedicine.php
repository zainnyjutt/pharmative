<html>
<head>
<title>Add Medicine</title>
<link rel="stylesheet" href="addstylesheet.css">
  



  
</head>
<body>




<form method="POST" action="addmedicinecon.php">
<div class="add-box">
<h2>Add Medicine</h2>
<div class="textbox4">
<i class="fa fa-building-o" aria-hidden="true"></i>

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
    
 echo "<select  name='cname' id='nb' class='textbox3' style='background-color:rgba(0,0,0,0.4); color:white; width:90%; height:40px; border:none; font-size:18px; padding-top:5px; padding-left:9.5px;'>";
        foreach($selectedProduct as $optionName){
          echo "<option value=".$optionName.">".$optionName."</option>";
        }  
        echo "</select>";


?>

</div>

<div class="textbox4">
<i class="fa fa-plus-square" aria-hidden="true"></i>

<?php
$l="localhost";
$r="root";
$p="";
$d="pharmative";


$link=mysqli_connect($l,$r,$p,$d);


        $sql = "SELECT * FROM category";
        $result = mysqli_query($link,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row1 = mysqli_fetch_assoc($result)) {
                $selectedProduct1[] = $row1['category'];
            }
        }
    
    
 echo "<select  name='catname' id='nb' class='textbox4' style='background-color:rgba(0,0,0,0.4); color:white; width:90%; height:25px; border:none; font-size:18px; padding-top:1px; padding-bottom:1px; padding-left:9.5px;'>";
        foreach($selectedProduct1 as $optionName1){
          echo "<option value=".$optionName1.">".$optionName1."</option>";
        }  
        echo "</select>";


?>
</div>
<div class="textbox4">
<i class="fa fa-plus-square" aria-hidden="true"></i>
<input type="text" placeholder="Medicine Name" id="in" name="mname" style="color:white; width:80%; height:25px; font-size:18px; background:none; border:none;"  required>
</div>

<div class="textbox4">
<i class="fa fa-tachometer" aria-hidden="true"></i>

<select  name="unit" id="nb2" class="textbox5" style="background-color:rgb(0,0,0,0.0); height:25px; padding-top:1px; padding-bottom:1px;">
<option value="#">Unit</option>
<option value="ml">ml</option>
<option value="mg">mg</option>
</select>
</div>




<div class="textbox4">
<i class="fa fa-calendar-times-o" aria-hidden="true"></i>
<label style="color:grey;">Expiry Date</label>
<input type="date" name="expiry"  required />

</div>

<div class="textbox">
<i class="fa fa-area-chart" aria-hidden="true"></i>
<input type="text" placeholder="Quantity" name="stock" required>
</div>


<div class="textbox">
<i class="fa fa-money" aria-hidden="true"></i>
<input type="text" placeholder="Price" name="price" required>
</div>



<input class="btn" type="submit" name="btn" value="Add Medicine">

</div>

</form>
</body>

</html>