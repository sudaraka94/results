<?php 

	if(isset($data['loggedIn'])){
		echo "loged In";
		
	}
	else{
		include '../app/views/Forms/loginForm.php';
	}


?>
 