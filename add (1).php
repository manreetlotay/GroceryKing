<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$productInfo = simplexml_load_file('productInfo.xml');

		switch ($_POST["category"]) {
		        case 'fruits':
		            $category = $productInfo->fruits;
		            break;
		        case 'vegetables':
		            $category = $productInfo->vegetables;
		            break;
		        case 'dairy':
		            $category = $productInfo->dairy;
		            break;
		        case 'meat':
		            $category = $productInfo->meat;
		            break;
		    }

		$highestId = $productInfo->xpath("//highestId")[0];

		$product = $category->addChild('product');
    $product->addChild('image', $_POST['image']);
		$product->addChild('id', $highestId + 1);
		$product->addChild('name', $_POST['name']);
		$product->addChild('inventory', $_POST['inventory']);
		$product->addChild('price', $_POST['price']);
    $product->addChild('description', $_POST['description']);

		$productInfo->highestId = $highestId + 1;

		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($productInfo->asXML());
		$dom->save('productInfo.xml');


		$_SESSION['message'] = 'Product Added Successfully';
		header('location: P7.php');
	}
?>
