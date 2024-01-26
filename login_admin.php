<?php include '../db.php';


if(isset($_REQUEST['login'])){

$first_name=$_REQUEST['first_name'];
$password=$_REQUEST['password'];

$get_users="select * from users_details where first_name='".$first_name."' and password='".$password."' and user_type='admin'";
$result=mysqli_query($conn,$get_users);
$rowcount=mysqli_num_rows($result);
 while ($row=mysqli_fetch_array($result)) {
  $user_id=$row['user_id'];
 
 }
 
if($rowcount>0){
$update_user="UPDATE `users_details` SET `login_user` = '1' WHERE `user_id` = '".$user_id."' ";
mysqli_query($conn,$update_user);
$_SESSION['login_username_id']=$user_id;
header("location:index.php");

}else{

header("location:login.php?LoginDetailsAreIncorrect");


}


}



?>


<html>
<head>
<title>Login User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/login_admin.css" />
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
				    <h1>Login</h1><br/><br/>
					<input class="text" type="text" name="first_name" placeholder="Enter Your First Name" required=""><br/><br/>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input type="submit" value="LOGIN" name="login">
					
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
	 
</body>
</html>