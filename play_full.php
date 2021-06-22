<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: x-access-header, Authorization, Origin, X-Requested-With, Content-Type, Accept");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#e50914">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#e50914">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#e50914">
	
	<title>Arcade Games</title>
	<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	
    <script src="assets/js/jquery.min.js"></script>
    <style>
    	body{
    		height: 100%;
    		padding: 0;
    	}
    	.header-main{
		    padding: 16px 12px 12px;
			border-bottom: 3px ridge #ccc;
			background: #000;
    	}
    	iframe {
		    border: none;
		    width: 100%;
		    padding: 0;
		    margin: 0;
		    height: calc(100% - 98px);
		    min-height: 768px;
		}
    </style>	
</head>
<body>
	<div class="header-main">
		<a href="index.php">
			<img src="assets/img/icons.png" alt="Logo" height="75px" style="margin:20px 0;">
		</a>
		
	</div>

	<?php

	$judul = '';
	$link = '';
	if(isset($_GET['a'])){
		$a = $_GET['a'];
		$judul = strtoupper($a);
		$link = "games/$a/index.html?t=".time();
		if($a == "Seatrader"){
			$link = "https://seatrader.frvr.com/";
		}
	}

	?>
	<iframe src="<?= $link; ?>" allowfullscreen="true" class="idframe"></iframe>

	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>