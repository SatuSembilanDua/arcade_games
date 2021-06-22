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

<h2><?= $judul; ?></h2>
<br>
<div id="container">
	<iframe src="<?= $link; ?>" allowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" class="idframe"></iframe>
<br>
<a href="<?= $link; ?>" class="btn btn-danger btn-nav-bottom btn-lis">Full Screen</a>
</div>