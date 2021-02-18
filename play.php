<h2><?= isset($_GET['a'])?strtoupper($_GET['a']):''; ?></h2>
<br>
<div id="container">
	<iframe src="games/<?= $_GET['a']; ?>/index.html?t=<?= time(); ?>" allowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" class="idframe"></iframe>
</div>
