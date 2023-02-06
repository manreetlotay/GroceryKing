<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!--css file link-->
		<link rel="stylesheet" href="loginStyle.css">
		
		<!--Font awesome Icons link-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
		
		<title>Login</title>
		
	</head>
	
	<body>
		                                                       
		<!--- login page section starts-->
			
		<!--left side of the page-->
		<section class ="img">
			<img src="images/foodbasket.jpg" alt="food basket">
		</section>
		
		<!--right side of the page-->	
		<section class="page5">
			<div class="loginPage">
				<h2>Grocery King</h2>
				
					<form method="post" action="loginAction.php" >
					
						
					
						<input type="email" id="inp" name="email" placeholder="Enter email" required><br>
						<input type="password" id="inp" name="password" placeholder="Enter password" required><br>
						
						<p>
							<a href="#">Forget Password?</a>  <!--not functional yet-->
							<br><br>
							Don't have an account? <a href="register.php">Register here</a>    
						</p>
						</p>
						
						<p><input type="submit" name="login" class="submit" value="Login"></p>
						
						<?php
							//display error message if password is incorrect or if user does not exist
							if(isset($_SESSION['errors']))
							{
								echo "<p> " . $_SESSION['errors'] . "</p>";
							}
						?>  
						
					</form>
			
			</div>
		</section>
		
		<!--- login page section ends-->
		
	</body>
	
</html>
	
	