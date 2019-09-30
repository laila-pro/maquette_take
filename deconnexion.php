<?php
// On active les sessions :
	session_start();

// On detruit les sessions :
	session_destroy();
	
// On redirige le visiteur vers la page désirée :
	header('Location:index.php');
	exit();
?>
