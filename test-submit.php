<?php
if (isset($_GET['action'])){
	$action=$_GET['action'];
	if($action=="inscription"){
		?>
		Votre email est <?=$_POST['user_email']?>	
		<br>Votre mot de passe est <b><?=$_POST['usesr password']?><b/>
	<?php
}
}else{
	echo "Aucune action existante!";
}	