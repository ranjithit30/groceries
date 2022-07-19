<?php

	$dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

	$xml_file_name = 'product.xml';

		$root = $dom->createElement('Product');

		$product_node = $dom->createElement('name');

		$attr_product_id = new DOMAttr('Product_id', '1');

		$product_node->setAttributeNode($attr_product_id);

		$child_node_title = $dom->createElement('Title', 'Jbl Headphones');

		$product_node->appendChild($child_node_title);

		$child_node_year = $dom->createElement('Price', 3000);

		$product_node->appendChild($child_node_year);


		$child_node_ratings = $dom->createElement('Ratings', 6.2);

		$product_node->appendChild($child_node_ratings);

		$root->appendChild($product_node);

		$dom->appendChild($root);

	$dom->save($xml_file_name);

	echo "$xml_file_name has been successfully created";
	echo "<script>alert('file created successfully');</script>";
	echo "<script>window.open('product.xml','_self')</script>";
?>
