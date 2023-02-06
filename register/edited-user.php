<?php require_once("../register/functions.php");



if(isset($_POST['submit'])) {
    $xml = new DOMDocument('1.0', "UTF-8");

    $xml->preserveWhiteSpace = false;
    $xml->formatOutput = true;
    $xml->load("userInfo.xml");


    $id = $_POST['user-id'];
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $e_mail = $_POST['email'];
    $p_number = $_POST['phoneNumber']; 
    $pass = $_POST['password'];
    $c_ountry = $_POST['country'];
    $p_rovince = $_POST['province'];
    $c_ity = $_POST['city'];
    $s_treet = $_POST['street']; 
    $a_pt = $_POST['apt']; 
    $postal_code = $_POST['postalcode'];

    $root = $xml->documentElement;
    $users = $root->getElementsByTagName("user");

    foreach ($users as $user) {
        if ($user->getElementsByTagName('id')->item(0)->textContent == $id) {
            $user->getElementsByTagName('firstName')->item(0)->textContent = $fName;
            $user->getElementsByTagName('lastName')->item(0)->textContent = $lName;
            $user->getElementsByTagName('email')->item(0)->textContent = $e_mail;
            $user->getElementsByTagName('phoneNumber')->item(0)->textContent = $p_number;
            $user->getElementsByTagName('apt')->item(0)->textContent = $a_pt;
            $user->getElementsByTagName('city')->item(0)->textContent = $c_ity;
            $user->getElementsByTagName('province')->item(0)->textContent = $p_rovince;
            $user->getElementsByTagName('postalcode')->item(0)->textContent = $postal_code;
            $user->getElementsByTagName('country')->item(0)->textContent = $c_ountry;
            $user->getElementsByTagName('password')->item(0)->textContent = $pass;
        }

    }

    $xml->save("userInfo.xml") or die("Error, unable to create xml file.");

    header("Location: p9.php");
} else {
    header("Location: p9.php");
}

    ?>
