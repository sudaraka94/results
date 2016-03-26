

<form action = "<?php echo Config::get("rewriteBase/public").'/home/login';?>" method = "post">	
	<p>
		Index Number : 	<input type="text" name = "userName" maxlength ="7" >
		<br>
	</p>
	<input type="submit" name = "submit" value= "Submit"/>
</form>