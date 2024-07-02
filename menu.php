<html>
<head>
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
<body>
<div class="site-wrap">


    <div class="site-navbar py-2" >

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone"><strong class="text-primary">Pharma</strong>tive</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="<?php if($page=='index'){echo 'active';}?>" ><a href="index.php">Home</a></li>
                <li class="<?php if($page=='stock'){echo 'active';}?>"><a href="stock.php">Stock</a></li>
                <li class="has-children">
                  <a href="#">Add</a>
                  <ul class="dropdown">
                    <li><a href="company.php">Company</a></li>
                    <li><a href="category.php">Category</a></li>
                    <li><a href="addmedicine.php">Medicine </a></li>
                   
                    
                  </ul>
                </li>
				<li class="has-children">
                  <a href="#">View</a>
                  <ul class="dropdown">
                    <li><a href="viewcompany.php">Company </a></li>
                    <li><a href="viewcategory.php">Category </a></li>
                    <li><a href="viewmedicine.php">Medicine </a></li>
                   
                    
                  </ul>
                </li>
                <li class="<?php if($page=='about'){echo 'active';}?>"><a href="about.php">About</a></li>
                <li class="<?php if($page=='contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search" ></span></a>

			<a href="sale.php"><input type="submit" value="SALE" id="button" style="height:40px; width:110px; left:102%; background:#438000; border:none; color:white; border-radius:35px; cursor:pointer; font-size:18px;"></a>
			<a href="logout.php"><input type="submit" value="LOG OUT" id="button" style="height:40px; width:110px; left:102%; background:#438000; border:none; color:white; border-radius:35px; cursor:pointer;"></a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
		
		
		
		
      </div>
    
	
	
	
	
    

</div>
</div>
</body>
</html>
