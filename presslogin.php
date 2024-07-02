<?php
    session_start();
    $message="";
   
$servername="localhost";
$user="root";
$pass="";
$database="pharmative";
$email=$_POST["email"];
$password=$_POST["password"];
$link=mysqli_connect($servername,$user,$pass,$database);
     
		$qry="SELECT * FROM userdata WHERE email='$email' and password='$password'";
		
        $result = mysqli_query($link,$qry);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
       $_SESSION["fname"] = $row['fname'];
		$_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
		$_SESSION["cnic"] = $row['cnic'];
		if(null!==$_SESSION["email"] AND $_SESSION["password"]) {
  header("Location:index.php");
    }
		}
	
        else { header("Location:invalid.php");
        
        }
    
   
?>
