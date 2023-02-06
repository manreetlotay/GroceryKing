<?php

		session_start();
		
		//load xml file 
		$userFile = simplexml_load_file('register/userInfo.xml');
		
		//source: https://stackoverflow.com/questions/19632439/how-to-match-credentails-using-xml-on-login-html-page
		if (isset($_POST['login']))
		{
			//retrieve login info
			$email = $_POST['email'];
			$password = $_POST['password'];
				
		//check if user exists in the system
		foreach($userFile->user as $user)
		{
			//if correct information is entered, start session and user is redirected to the home page
			if($user->email == $email && $user->password == $password)
			{
				//get user's email as username
				$_SESSION['username'] = $email;
				
				//store isloggedin variable is session
				$_SESSION['isLoggedIn'] = true;
				
				//if user is admin, redirect to backstore pages
				if (($email == 'admin@example.com') && ($password == 'admin'))
				{
					header('Location: backstore.html');   //add file name of backstore page
				}
				else
				{
					//otherwise redirect to the home page
					header('Location: index.php');
				}
			}
			
			//if incorrect information in entered
			if($user->email == $email && $user->password != $password)
			{
				$_SESSION['errors'] = "Your username or password was incorrect";
				header('Location:login.php');
			}
			
			//if user doesn't exist
			if($user->email != $email)
			{
				$_SESSION['errors'] = "This account does not exist";
				header('Location:login.php');
			}
			
		}
			
		}	
?>


