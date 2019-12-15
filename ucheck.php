<?php
	require "header.php";

    $umn = $_POST ["umn"];
	$mn = $_POST ["mn"];
	$sum = $umn * $mn;
	echo "Ответ: ".$sum;
	
	require "bottom.php";
?>