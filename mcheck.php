<?php
	require "header.php";

    $um = $_POST ["um"];
	$vych = $_POST ["vych"];
	$sum = $um - $vych;
	echo "Ответ: ".$sum;
	
	require "bottom.php";
?>