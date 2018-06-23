<?php 
	$entradas = 0;

	if ($entradas > 0) {
		echo "hay entradas";
	} else {
		echo "no hay entradas";
	};

	echo "<br>";

	$hora = date("H");
		if ($hora < 12) {
			echo "buenos dias";
		}elseif ($hora < 20) {
			echo "buenas tardes";
		}else{
			echo "buenas noches";
		};
 ?>