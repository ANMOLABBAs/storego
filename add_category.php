<?php include '../db.php';


if(isset($_REQUEST['add'])){

$category=$_REQUEST['category'];
$sub_category=$_REQUEST['sub_category'];

$insert_category="INSERT INTO `add_category` (`category_id`, `category`, `sub_category`) VALUES (NULL, '".$category."', '".$sub_category."');";
$conn->query($insert_category);

header("location:add_category.php");
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
	<link rel="stylesheet" type="text/css" href="css/login_admin.css" />


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
input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
    width: 35%;
    margin-left: 116px;
   
}
h1, .h1 {
    font-size: 2rem;
}
text:focus, .text:valid {
    box-shadow: none;
    outline: none;
    background-position: 0 0;
    width: 384px;
    height: 47px;
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
              <a href="index.html" class="text-black"><span class="text-primary">STORE GO</a>
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
	  
	 
  <div class="main-w3layouts wrapper">
		
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
				    <h1>Add Category</h1><br/>
					<input class="text" type="text" name="category" placeholder="ADD CATEGORY HERE" ><br/>
					
					<select  class="text"  aria-label=".form-select-lg example" name="sub_category">
  								<option value=" " selected>Select Sub Category</option>
								<?php 
								
								$main_categories="SELECT * FROM `add_category` where sub_category=''";
								$result=mysqli_query($conn,$main_categories);
								$rowcount=mysqli_num_rows($result);

								 while($row=mysqli_fetch_assoc($result)){
 
								$category_id= $row["category_id"];
								$category= $row["category"];

								
								?>
  								<option value="<?php echo $category_id; ?>"  name="sub_category"><?php echo $category; ?></option>
								
								<?php } ?>
							</select>
                    <input  type="submit" name="add" class="btn btn-dark btn-lg btn-block"   />
              		
					
				</form>
				
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
  


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>