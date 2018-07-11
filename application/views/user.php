<?php 
foreach ($user as $u){
	?>
	<h1><?php echo $u['userID']; ?></h1>
	<p><?php echo $u['name']; ?></p>
	<?php
}
?>