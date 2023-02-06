<?php
	require_once("../register/functions.php");
	//source: https://www.youtube.com/watch?v=nUNL1KW7Ejo&ab_channel=PremParashar
	$xml = new DomDocument("1.0", "UTF-8");
	
	//format userInfo.xml file
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	
	$xml->load("userInfo.xml");



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
		$users = $xml -> getElementsByTagName("users")->item(0);

		$user = $xml ->createElement("user");
		$user->setAttribute("name", $_POST['firstName']);

		//retrieve registration form info 
		$id = getNextUserID();
		$fName = $_POST['firstName'];
		$lName = $_POST['lastName'];
		$e_mail = $_POST['email'];
		$p_number = $_POST['phoneNumber']; 
		$pass = $_POST['password'];
		$cpass = $_POST['cpassword'];
		$c_ountry = $_POST['country'];
		$p_rovince = $_POST['province'];
		$c_ity = $_POST['city'];
		$s_treet = $_POST['street']; 
		$a_pt = $_POST['apt']; 
		$postal_code = $_POST['postalcode'];
		
		
		//if password and confirm password do not match
		if($pass != $cpass)
		{
			echo'Passwords do not match';
		}
		
		//if no errors were made, update existing xml file with retrieved registration form info
		$xml->getElementsByTagName("next")->item(0)->textContent = $id + 1;

		$user=$xml->createElement("user");
		$userInfo->appendChild($user);

	    $fid= $xml->createElement("id", $id);
        $user->appendChild($fid);

		$firstName=$xml->createElement("firstName", $fName);
		$user->appendChild($firstName);
		
		$lastName=$xml->createElement("lastName", $lName);
		$user->appendChild($lastName);
		
		$email=$xml->createElement("email", $e_mail);
		$user->appendChild($email);

		$phone=$xml->createElement("phoneNumber", $p_number);
		$user->appendChild($phone);
		
		$password=$xml->createElement("password", $pass);
		$user->appendChild($password);
		
		$country=$xml->createElement("country", $c_ountry);
		$user->appendChild($country);

		$province=$xml->createElement("province", $p_rovince);
		$user->appendChild($province);

		$city=$xml->createElement("city", $c_ity);
		$user->appendChild($city);

		$street=$xml->createElement("street", $s_treet);
		$user->appendChild($street);
		
		$apt=$xml->createElement("apt", $a_pt);
		$user->appendChild($apt);
		
		$postalcode=$xml->createElement("postalcode", $postal_code);
		$user->appendChild($postalcode);
		
		//save updated file
		$xml->save("userInfo.xml");

	}
	
	//once user has completed registration, redirect to login page
	header('Location:login.php');
	die;






















	

