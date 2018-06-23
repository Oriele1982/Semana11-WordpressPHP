<?php 

	$categories = array("PHP", "JAVASCRIPT", "HTML", "CSS");
	echo $categories[3];
	
	echo "<br>"	;

	$args = array(
		"author" => "Oriele Nieto",
		"category" => "PHP",
		"post_name" => "5 formas de aprender Wordpress fácilmente"
	);

	//echo $args['post_name'] . ", entrada públicada por " . $args['author'] . ", en la categoría de" . $args['category'] ;

	// var_dump($args);

	print_r($args);
 ?>