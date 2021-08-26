<?php
    $xml_location = "../../resources/data/products.xml";
    $product_list = simplexml_load_file($xml_location);
    $product = $product_list->addChild("product");
    $product->addChild("prod_name", $_POST['prodName']);
    $product->addChild("prod_aisle", $_POST['productAisle']);
    $product->addChild("prod_count", $_POST['prodQuantity']);
    $product->addChild("prod_price", $_POST['productPrice']);
    $product_list->asXML($xml_location);
?>