<?php 
session_start();
  include("header.php");
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<html lang="en">
    <head>
        <meta charset="UFT-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style1.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <script defer src="activePage.js"></script>
        <title>Online document request</title>
    </head>
    <li><a href="/about.php" class="active">About</a></li>
    <body>
     

		<div class="container">
      <div class="wrapper">
        <div class="title"><span>Signup Form</span></div>
        <form method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input id="text" type="text" placeholder="" name="user_name" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input id="text" type="password" placeholder="" name ="password" required>
          </div>
         
          <div class="row button">
            <input type="submit" value="signup">
          </div>
          
        </form>
      </div>
    </div>


</body>
</html>