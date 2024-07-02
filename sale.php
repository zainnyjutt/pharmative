<html>
<head> 


<title>search</title>
</head>
<body>
<?php
include('menu.php');
?>
</br>

<div id="search-bar">
<h3>Search Medicine:</h3>
<input type="text" id="live_search"  autocomplete="off" / style="width:100%; background:none; border-bottom:2px solid #438000;">
</div>


<div align="center" id="search-bar">

<button style="width:12%; height:40px; font-size:18px; border-radius:50px; cursor:pointer; background:#438000; color:white;" onClick="window.location.href=window.location.href">Clear Data</button>
</div>

<div id="searchresult"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
<!--Live Search-->
$(document).ready(function(){
	
 $("#live_search").keyup(function(){
	var input=$(this).val();
	<!--alert(input);-->
	if(input !="" ){
		$.ajax({
			url:"livesearch.php",
			method:"POST",
			data:{input:input},
			success:function(data){
				$("#searchresult").html(data);
			}
		});
	}else{
		$("#searchresult").css("display","none");
	}
 });
}); 
	
 
</script>



</br>
</br>
<div style="border-top:1px solid #438000;"></div></br>

</br>
<h3>Search Category:</h3>
<div id="search-bar">

<input type="text" id="search_category"  autocomplete="off" / style="width:100%; background:none; border-bottom:2px solid #438000;">
</div>

<div align="center" id="search-bar">

<button style="width:12%; height:40px; font-size:18px; border-radius:50px; cursor:pointer; background:#438000; color:white;"  onClick="window.location.href=window.location.href">Clear Data</button>
</div>

<div id="searchresult1"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
<!--Live Search-->
$(document).ready(function(){
	
 $("#search_category").keyup(function(){
	var input=$(this).val();
	<!--alert(input);-->
	if(input !="" ){
		$.ajax({
			url:"searchcategory.php",
			method:"POST",
			data:{input:input},
			success:function(data){
				$("#searchresult1").html(data);
			}
		});
	}else{
		$("#searchresult1").css("display","none");
	}
 });
}); 
	
 
</script>




 </body>
</html>




