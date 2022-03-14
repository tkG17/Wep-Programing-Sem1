<?php
$cookie_name = "user";
$cookie_value = "mulzahrian";
setcookie($cookie_name, $cookie_value, time() + 3600);
?>
<html>
<body> 
<?php
if(!isset($_COOKIE[$cookie_name])) {
	echo "Nama cookie '" . $cookie_name . "' belum di set!";
	} else{
		echo "cookie '" . $cookie_name . "' sudah di set!<br>";
		echo "value-nya adalah: " . $_COOKIE[$cookie_name];
	}
	?>
	
	</body>
	</html>
