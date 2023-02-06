<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $productInfo = simplexml_load_file("productInfo.xml");
    list($product) = $productInfo->xpath("//product[./id='$id']");
    unset($product[0]);

    echo $productInfo->asXML("productInfo.xml");
}

header("Location: P7.php");

?>
