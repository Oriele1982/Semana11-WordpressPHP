<?php 

	function holaMundo(){
		echo "hola mundo";
	}

	holaMundo();

	function dl_image_sizes($sizes){
		$addsizes = array(
			"slideshow" => __("Tamaño del slideshow"),
			"custom_logo" => __("Tamaño personalizado del logo"),
			"entradas" => __("Tamaño personalizado de las entradas"),
		);
		return array_merge($sizes, $addsizes);
	};

	//Agrega tamaños de imágenes personalizados en post
	if (function_exists('add_theme_support')) {
		add_image_sizes('slideshow', 800, 600, true); //Personalización de tamaño del slideshow
		add_image_sizes('custom_logo', 150, 150, true); //Personalización de tamaño del logo
		add_image_sizes('entradas', 750, 490, true); //Personalización de tamaño de las entradas

		add_filter('image_size_name_choose', 'dl_image_sizes');
	};
 ?>