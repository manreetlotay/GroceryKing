<?php require_once("../register/functions.php");


if(isset($_GET['id'])) {
    $user_id =  htmlspecialchars($_GET["id"]);

    deleteUserXml($user_id);
    header("Location: p9.php");
} else {
    header("Location: p9.php");
}

?>
