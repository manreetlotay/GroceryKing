<?php
	session_start();
	if(isset($_POST['edit'])){
		$productInfo = simplexml_load_file('productInfo.xml');
		foreach ($productInfo->children() as $category) {
		    foreach ($category->product as $product) {
		        if ($product->id == $id) {
		            $product->image = $_POST['image'];
		            $product->name = $_POST['name'];
		            $product->inventory = $_POST['inventory'];
		            $product->price = $_POST['price'];
		            $product->description = $_POST['description'];
		            break;
		        }
		    }
		}

		file_put_contents('productInfo.xml', $productInfo->asXML());
		$_SESSION['message'] = 'Product Updated successfully';
		header('location: P7.php');
	}
?>
