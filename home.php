<h2>LIST GAMES</h2>
<div class="row">
<?php

	$google_doodle = array( "Beethoven", 
							"Halloween", 
							/*===========*/
							"Beethoven" => "https://www.google.com/logos/2015/beethoven15/beethoven15.html?hl=id",
							"Halloween" => "https://www.google.com/logos/2016/halloween16/halloween16.html?hl=id",
							);								
	$frvr = array(
					"Seatrader",
					"Seatrader" => "https://seatrader.frvr.com/",
				);

	$gem = scandir("games");
	unset($gem[0],$gem[1]);
	foreach ($gem as $k => $v) {
		$img = 'assets/img/thumb/'.get_thumbnail($v);
		$link = "index.php?page=play&a=$v";
		if(in_array($v, $google_doodle)){
			$link = $google_doodle[$v];
		}
?>
		<div class="col-md-2 col-xs-4 col-list">
			<div class="game-list">
				<a href="<?= $link;?>" title="<?= $v; ?>">
					<div class="poster-img">
						<div class="img-list" style="background-image: url(<?= $img; ?>);" ></div>
						<div class="see"><i class="fa fa-play"></i></div>
					</div>
				</a>
				<a href="<?= $link;?>" title="<?= $v; ?>">
					<div class="game-judul">
						<p>
							<!-- <i class="fa fa-play"></i> --> 
							<?= strtoupper($v); ?>
						</p>
					</div>
				</a>
			</div>
		</div>
<?php 
	}

?>
</div>

<?php

function get_thumbnail($name){
	$thumbs = scandir("assets/img/thumb");
	unset($thumbs[0],$thumbs[1]);
	foreach ($thumbs as $k => $v) {
		$fl = explode(".", $v);
		if($fl[0]==strtolower($name)){
			return $v;
		}
	}

}

?>
