<?php
	require "header.php";

    $delim = $_POST ["delim"];
	$delit = $_POST ["delit"];
	if ($delit != 0) {
		$sum = $delim / $delit;
		echo "Ответ: ".$sum;
	} else {
		echo "error";
	}
	
	require "bottom.php";
?>