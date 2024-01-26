	<?php include '../db.php';



$get_users="select * from `users_details` where  user_id='".$_SESSION['login_username_id']."' and user_type='admin'  ";
$result=mysqli_query($conn,$get_users);
while($show_users=mysqli_fetch_array($result)){
$user_id=$show_users['user_id'];
$first_name=$show_users['first_name'];
$last_name=$show_users['last_name'];
}

if (isset($_REQUEST['status_done'])){

$status_type=$_REQUEST['status_type'];
$status_done=$_REQUEST['status_done'];

$update_status="UPDATE `order_details` SET `status` = '".$status_type."' WHERE `order_id` ='".$status_done."'";
$conn->query($update_status);
header('location:order_details.php');
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" type="text/css" href="css/login_admin.css" />


    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
	<style>
     body{
	 background:white;}
	.main{
	width:100%;
	}
	
	.row_1{
	width:90%;
    border: 1px solid #333333;
	overflow:hidden;
	margin-left:auto;
	margin-right:auto;
	}
	.col_1{
	 margin-bottom: -4px;
	width:16.66%;
	float:left;
	border:1px;
	border: 1px solid #333333;
	
	}

.col_2{
	width:16.66%;
	float:left;
	border:1px;
	border: 1px solid #333333;
	padding:15px;
	
	
	}

.botton_status{
    margin:0px;
    padding:0px;
    width:50px;
	}
	
	</style>
	
  </head>
  <body>
   <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.php" class="text-black"><span class="text-primary">STORE GO</a>
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

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h5"></span></a></div>

          </div>
        </div>

      </header>
	  

  
  
    <div class="main">
	
	
	
	
	<div class="row_1">
	
	<div class="col_2"><h5>ORDER NO</h5></div>
	<div class="col_2"><h5>CUSTOMER NAME</h5></div>
	<div class="col_2"><h5>TOTAL BILL</h5></div>
	<div class="col_2"><h5>STATUS</h5></div>
	<div class="col_2"><h5>DATE</h5></div>
	<div class="col_2"><h5>CHECK ORDER </h5></div>
	</div>




	<?php  
	
	
	
	$select_order="SELECT * FROM `order_details`";
	 $result_order=mysqli_query($conn,$select_order);
	
	
	 while($row_result_order=mysqli_fetch_assoc($result_order)){
	 
	 $order_id=$row_result_order['order_id'];
	 $user_name=$row_result_order['first_name'];
	 $total=$row_result_order['total_price'];
	 $date=$row_result_order['date'];
	 $status=$row_result_order['status'];
	
	
	$select_order_status="SELECT * FROM `order_details` where order_id='".$order_id."' ";
	$result_status=$conn->query($select_order_status);
	
	while($row_result_status=mysqli_fetch_assoc($result_status)){
	
	$status_order=$row_result_status['status'];
	
	}
	
	
	?>
	<div class="row_1">
	
	
	
	<div class="col_1" ><br/><?php echo $order_id; ?><br/><br/></div>
	<div class="col_1" ><br/><?php echo $user_name; ?><br/><br/></div>
	<div class="col_1" ><br/><?php echo $total; ?><br/><br/></div>
	
	<div class="col_1" ><br/>
	<form method="post"  action="order_details.php" enctype="multipart/form-data">
	<select  class="text"  aria-label=".form-select-lg example" name="status_type" >
	
  	<option   value=" " selected>Select Status</option>
	
	<?php 
	$select_status="SELECT * FROM `status_order`";
	 $result_status=mysqli_query($conn,$select_status);
	 
	 while($row_result_status=mysqli_fetch_assoc($result_status)){
	$status=$row_result_status['status'];
	
	
	
	?>
	
	 
	
	
	<option value="<?php echo $status; ?>"><?php echo $status; ?></option>


	
	<?php } ?>
	
	    
		
		<input type="submit" value="<?php echo $order_id; ?>" name="status_done" style="margin:0px; padding:0px;width:40px; "/>
	   <?php echo $status_order; ?>
	
	</select>
	</form>
	
	</div>
		<div class="col_1" ><br/><?php echo $date; ?><br/><br/></div>
	<div class="col_1" ><br/><a href="user_order_details.php?order_id=<?php echo $order_id; ?>" > VIEW </a><br/><br/></div>
	</div>
	 
	
	
	<?php } ?>
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>