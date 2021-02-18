<h2>LIST GAMES</h2>
<div class="row">
<?php
	
	$gem = scandir("games");
	unset($gem[0],$gem[1]);

	foreach ($gem as $k => $v) {
		$img = 'assets/img/thumb/'.strtolower($v).'.jpg';
?>
		<div class="col-md-2 col-xs-4 col-list">
			<div class="anime-list">
				<a href="index.php?page=play&a=<?= $v;?>" title="<?= $v; ?>">
					<div class="poster-img">
						<div class="img-list" style="background-image: url(<?= $img; ?>);" ></div>
						<div class="see"><i class="fa fa-play"></i></div>
					</div>
				</a>
				<a href="index.php?page=play&a=<?= $v;?>" title="<?= $v; ?>">
					<div class="anime-judul">
						<p><i class="fa fa-play"></i> <?= strtoupper($v); ?></p>
					</div>
				</a>
			</div>
		</div>
<?php 
	}

?>
</div>
