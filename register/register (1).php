<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- font awesome link -->
		<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>
		
		<!-- link css file for register page -->
		<link rel="stylesheet" href="registerStyle.css">
		
		<title>Register</title>
	</head>
		
	<body>
			
		
		<!--- register page section starts-->
		
		<!--left side of the page-->
		<section class ="img">
			<img src="images/foodbasket.jpg" alt="banner">
		</section>
	
		<!--right side of the page-->
		<section class="page6">
			<div class="registerPage">
			
				<h2>Create An Account</h2>
				
				<form class="" action="registerAction.php" method="post">

						<input type="text" name="firstName" placeholder="First Name" required> 
						<input type="text" name="lastName" placeholder="Last Name" required>

						<input type="email" name="email" placeholder="Email Adress" required>
						<input type="text" name="phoneNumber" placeholder="Phone Number" required>
						<input type="password" name="password" placeholder="Enter Password" required>
						<input type="password" name="cpassword" placeholder="Confirm Password" required>

						<input type="text" name="country" placeholder="Country" required>
						<input type="text" name="province" placeholder="Province" required>
						<input type="text" name="city" placeholder="City" required>
						<input type="text" name="street" placeholder="Street" required>
						<input type="text" name="apt" placeholder="Apt, Suite, unit, Building" required>
						<input type="text" name="postalcode" placeholder="Postal Code" required>
						
						<label class="checkbox">
							<input type="checkbox" id="terms" name="terms">
							<label for="terms"> &nbsp &nbsp &nbsp &nbsp &nbsp I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>	 <!--not functional yet-->   
				
						</label>
						
						<p><input type="submit" name="register" class="submit" value="Register Now"></p>
					
						<p>
							Already have an account? 
							<a href="login.php">Login here</a>      <!--will direct user to login page-->
						</p>

				</form>
				
			</div>
		</div>
		
		<!--- register page section ends here-->
	
	</body>

</html>


