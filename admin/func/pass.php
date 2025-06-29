<? if( session_id() == '' ) {  session_start();   }
		if(isset($_SESSION["u_id"]) && isset($_SESSION["u_nome"])) 
		{} else {
			
				header('Location:login.php');

		}
?>