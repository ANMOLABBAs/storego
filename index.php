<?php include '../db.php';



$get_users="select * from `users_details` where  user_id='".$_SESSION['login_username_id']."' and user_type='admin'  ";
$result=mysqli_query($conn,$get_users);
while($show_users=mysqli_fetch_array($result)){
$user_id=$show_users['user_id'];
$first_name=$show_users['first_name'];
$last_name=$show_users['last_name'];
}

if(isset($_REQUEST['logout'])){

$update_user="UPDATE `users_details` SET `login_user` = '0' WHERE `user_id` = '".$_SESSION['login_username_id']."' ";
mysqli_query($conn,$update_user);
$_SESSION['login_username_id']="";
session_destroy();
header('location:login_admin.php');


}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Admin</title>
	<style>
	body{
	height:0px;
	background:#00CC65;
	}
	.site-navbar {
    background:#99FF33;
}

	
	</style>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">ADMIN</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="index.php" class="nav-link">Welcome</a></li>
                  <li><a href="add_products.php" class="nav-link">Add Products</a></li>

                  <li><a href="add_category.php" class="nav-link">Add Category</a></li>

                  <li><a href="users_details.php" class="nav-link">User Details</a></li>
                  <li><a href="order_details.php" class="nav-link">Order Details</a></li>
                  <li><a href="?logout" class="nav-link">Logout</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
	  
	 
    <div class="hero" >
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					  <h1 class="admin" align="center">Welcome &nbsp;<?php echo $first_name;?></h1>

	
	
	
	</div>
  


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>