<?php 

session_start();
	include("connection.php");
	include("functions.php");


?>

<html lang="en">
    <head>
        <meta charset="UFT-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style1.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <script defer src="activepage.js"></script>
        <title>Online document request</title>
    </head>
    <body>
       <header>
        <div class="logo">Logo</div>
        <nav>
              <ul>
                        <li><a href="login.php" class="active">Home</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="/about.php">About</a></li>
                        <li><a href="/about">Admin</a></li>
                    </ul>
                </nav>
                <div class="navbar-toggle"><i class="fa-solid fa-bars"></i></div>
       </header>

       <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script src="index.js"></script>

            
        <div class="text-box">
            <h1>ICC BALAYAN<br>Document Request</h1>
            <p>
                This is the official website of the Immaculate Conception College (ICC) Office of the Registrar,<br> the custodian of academic records of students. It is responsible for maintaining the integrity<br> of the records under its care, making them available upon request.
            </p>
        <a href="http://iccbalayan.edu.ph/" class="hero-btn">VISIT US</a>
            
         </div>
          
        <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input id="text" type="text" placeholder="" name="user_name" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input id="text" type="password" placeholder="" name ="password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
        </form>
      </div>
    </div>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

            
            
			echo "<p align='center'> <font color=black font='system-ui' size='6px'>wrong username or password</font> </p>";
		}else
		{
			echo "<p align='center'> <font color=black font family='system-ui' size='6px'>wrong username or password</font> </p>";
		}

 
	}

?>
<script>
        function toggleMobileMenu(menu) {
            menu.classList.toggle('open');
        }
        
        
      </script>

</body>
</html>