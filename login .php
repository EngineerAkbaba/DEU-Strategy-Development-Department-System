<?php
	session_start();
	$kullanici = null;
	
	if(isset($_SESSION['kullanici'])) {
		$kullanici =  $_SESSION['kullanici'];
	}
?> 
<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Session</title>
	</head>
	<body> 
		<div>
			<?php 
				if(isset($kullanici)) {
					echo "Hoşgeldin Normal User" . $kullanici;
				}
				else {
					echo "<a href='index.php'>Giriş yapınız!</a>";
				}
			?>
		</div>
	</body>
</html>