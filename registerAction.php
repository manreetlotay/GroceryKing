<?php
	
	//source: https://www.youtube.com/watch?v=nUNL1KW7Ejo&ab_channel=PremParashar
	$xml = new DomDocument("1.0", "UTF-8");
	
	//format userInfo.xml file
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	
	$xml->load("register/userInfo.xml");


	//if xml file doesn't exist, create one from scratch
	if (!$xml)
	{
		$userInfo=$xml->createElement("userInfo");
		$xml->appendChild($userInfo);
	}
	//if xml file already exists
	else
	{
		//first child of xml file is the root
		$userInfo=$xml->firstChild;
	}

	//storing register form data into xml file when user submits form
	if (isset($_POST['register']))
	{
		//retrieve registration form info 
		$fName = $_POST['firstName'];
		$lName = $_POST['lastName'];
		$e_mail = $_POST['email'];
		$pass = $_POST['password'];
		$cpass = $_POST['cpassword'];
		$s_treet = $_POST['street'];
		$c_ity = $_POST['city'];
		$postal_code = $_POST['postalcode'];
		$P_rovince = $_POST['Province'];
		
		//if password and confirm password do not match
		if($pass != $cpass)
		{
			echo'Passwords do not match';
		}
		
		//if no errors were made, update existing xml file with retrieved registration form info
		$user=$xml->createElement("user");
		$userInfo->appendChild($user);
		
		$firstName=$xml->createElement("firstName", $fName);
		$user->appendChild($firstName);
		
		$lastName=$xml->createElement("lastName", $lName);
		$user->appendChild($lastName);
		
		$email=$xml->createElement("email", $e_mail);
		$user->appendChild($email);
		
		$password=$xml->createElement("password", $pass);
		$user->appendChild($password);
		
		$street=$xml->createElement("street", $s_treet);
		$user->appendChild($street);
		
		$city=$xml->createElement("city", $c_ity);
		$user->appendChild($city);
		
		$postalcode=$xml->createElement("postalcode", $postal_code);
		$user->appendChild($postalcode);
		
		$Province=$xml->createElement("Province", $P_rovince);
		$user->appendChild($Province);
		
		//save updated file
		$xml->save("register/userInfo.xml");

	}
	
	//once user has completed registration, redirect to login page
	header('Location: login.php');
	die;






















	

