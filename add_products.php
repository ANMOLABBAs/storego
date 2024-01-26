<?php include '../db.php';



if(isset($_REQUEST['add'])){

$product_title=$_REQUEST['title'];
$category=$_REQUEST['category'];
$discription=$_REQUEST['discription'];
$tag=$_REQUEST['tag'];
$sale_price=$_REQUEST['sale_price'];
$real_price=$_REQUEST['real_price'];
$image=$_FILES['image']['name'];
$product_image_count=count($_FILES["image"]["name"]);   
//print_r($product_image);	

$insert_product="INSERT INTO `add_product` (`product_id`, `title`, `category`, `discription`, `tag`, `sale_price`, `real_price`, `image`) VALUES (NULL, '".$product_title."', '".$category."', '".$discription."', '".$tag."', '".$sale_price."', '".$real_price."', '".$image."');";
$conn->query($insert_product);



 $get_users="SELECT * FROM `add_product` order by product_id desc limit 1";
	$result=mysqli_query($conn,$get_users);
 	while($row=mysqli_fetch_assoc($result)){
	$last_id= $row["product_id"];


}

$folderName='admin_pics';
		if(!is_dir($folderName))
		{		
			mkdir($folderName, 0777);
		}
		
		for($i=0; $i<$product_image_count; $i++){


echo $insert_images="INSERT INTO `multiple_images` (`image_id` ,`image_name` ,`product_id`)VALUES (NULL , '".$image[$i]."', '".$last_id."')";
$conn->query($insert_images);

		

$target_dir = $folderName."/".$image[$i];
move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_dir);

}


header("location:add_products.php");

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
select {
    word-wrap: normal;
    padding: 11px 230px 14px 14px;
    margin-bottom: 17px;
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
                <form method="post" action="add_products.php" autocomplete="off" enctype="multipart/form-data" >
				    <h1>Add Products</h1><br/>
					  <input type="text" name="title" class="text" placeholder="Add Title..." required="" />
					<br/>
										 <select class="form-select" name="category" >
                                          <option selected > Select Category</option>
<?php 

    $get_users="SELECT * FROM `add_category` where sub_category=' '";
   $result=mysqli_query($conn,$get_users);

    while($display_results=mysqli_fetch_array($result)){
	$id= $display_results["category_id"];                                
	$category= $display_results["category"];

?>  
 
                     <option  value="<?php echo $id; ?>"><?php echo $category; ?></option>
 
 		 
					 <?php 
								
								$main_categories1="SELECT * FROM `add_category` where sub_category='".$id."'";
								$result1=mysqli_query($conn,$main_categories1);
								$rowcount=mysqli_num_rows($result1);

								 while($row1=mysqli_fetch_assoc($result1)){
 
								$category_id1= $row1["category_id"];
								$category1= $row1["category"];

								
								?> 
  								<option value="<?php echo $category_id1; ?>"  name="main_category">----<?php echo $category1; ?></option>
								
								
								
								<?php } ?>
						<?php } ?>				 

     </select> 
<br/>
                    <input type="text" name="discription" class="text" placeholder="Add Discription..." required=""  />
                         <br/>
                     <input type="text" name="tag" class="text" placeholder="Product tag" required=""  />
                         <br/>
                     <input type="text"  name="sale_price" class="text" placeholder="Add Sale Price... "  required=""  />
                         <br/>
					<input class="text" type="text" name="real_price" placeholder="Add Real Price..." required="">
                        <br/>
                      <input type="file" name="image[]" class="text" placeholder="Write Your Category"  multiple/>
                        <br/>
                       <input  type="submit" name="add" class="btn btn-dark btn-lg btn-block"  />
              			
					
					
					
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