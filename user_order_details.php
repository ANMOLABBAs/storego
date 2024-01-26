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
height:0px;
}
	.main{
	width:100%;
	}
	
	.row_1{
	width:100%;
    border: 1px solid #333333;
	overflow:hidden;
	margin-left:auto;
	margin-right:auto;
	}
	.col_1{
	width:16.66%;
	float:left;
	border:1px;
	border: 1px solid #333333;
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

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  	<div style="width:80%;overflow:hidden;border:1px solid #333333;margin-left:auto;margin-right:auto;margin-top:100px;">
		
		<div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Order Id</div>
		<div style="width:12%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Name</div>
		<div style="width:15%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Address</div>
		<div style="width:12%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Phone</div>
		<div style="width:11%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Total Price</div>
		<div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Product</div>
		<div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Status</div>
		<div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"> Image</div>
		 <div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;">Quantity</div>

	</div>    
	
	
	
	
	
	<style>

.status_main {
width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:10px;text-align:center;
}

</style>

	
	<?php 
	
	$order_id1=$_GET['order_id'];
	
	$select_o_detail="SELECT * FROM `cart_order` where `order_id`='".$order_id1."' ";
	$get_cart=$conn->query($select_o_detail);
	while($result_cart_result=mysqli_fetch_assoc($get_cart)){
	
	$product_id1=$result_cart_result['product_id'];
	$quantity=$result_cart_result['quantity'];
	
	
	
	
	
	
	$select_image="SELECT * FROM `multiple_images` where product_id='".$product_id1."' ";
	$get_row_result=$conn->query($select_image);
	while($row_result=mysqli_fetch_assoc($get_row_result)){
	
	$image=$row_result['image_name'];
	}
	
	$select_o_detail="SELECT * FROM `order_details` where order_id='".$order_id1."' ";
	$order_details=$conn->query($select_o_detail);
	
	while($row_order=mysqli_fetch_assoc($order_details)){
	
	$address=$row_order['address'];
	$phone=$row_order['phone'];
	$status=$row_order['status'];
	$total_price=$row_order['total_price'];
	$name=$row_order['first_name'];
	}
	
	$select_product="SELECT * FROM `add_product` where product_id='".$product_id1."' ";
	$row_product=$conn->query($select_product);
	while($row_result_product=mysqli_fetch_assoc($row_product)){
	
	$title=$row_result_product['title'];
	}
	 ?>
	
	
	  	<div style="width:80%;overflow:hidden;border:1px solid #333333;margin-left:auto;margin-right:auto;">
		
          <div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><br/><?php echo $order_id1; ?><br/><br/><br/><br/><br/></div>
		 <div style="width:12%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><br/><?php echo $name; ?><br/><br/><br/><br/><br/></div>
		  <div style="width:15%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><br/><?php echo $address; ?><br/><br/><br/><br/></div>
		   <div style="width:12%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><br/><?php echo $phone ?><br/><br/><br/><br/><br/></div>
		    <div style="width:11%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"> <br/><?php echo $total_price; ?><br/><br/><br/><br/><br/></div>
		      <div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><br/><?php echo $title; ?><br/><br/><br/><br/><br/></div>
			   <div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><br/><?php echo $status; ?><br/><br/><br/><br/><br/></div>
		        <div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><br/><img src="../admin/admin_pics/<?php echo $image; ?>" width="60px"/> <br/><br/></div>
		           <div style="width:10%;float:left;overflow:hidden; border: 1px solid #333333;padding:5px;font-size:15px;text-align:center;"><?php echo $quantity; ?><br/><br/><br/><br/><br/><br/></div>

	</div>    
	  
	<?php } ?>  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  


	
	
	
	
	
	
	
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>