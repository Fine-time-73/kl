<?php
	require "header.php";

    $p = $_POST ["+"];
	if ($p == "+") {
		echo '<a href="p.php">Go<a>';
	}
	$m = $_POST ["-"];
	if ($m == "-") {
		echo '<a href="m.php">Go<a>';		
	}
	$u = $_POST ["*"];
	if ($u == "*") { 
		echo '<a href="u.php">Go<a>';
	}
	$d = $_POST ["/"];
	if ($d == "/") { 
		echo '<a href="d.php">Go<a>';
	}
	
	require "bottom.php";
?>