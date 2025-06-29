<?php
// Inicia sessões, para assim poder destruí-las
if( session_id() == '' ) {  session_start();   }
session_destroy();
		setcookie("LP34524312",  "", time()-10000000, "/", "core.flyupweb.com.br", "1");
		setcookie("ckID",  "", time()-10000000, "/", "core.flyupweb.com.br", "1");
		setcookie("ckMA",  "", time()-10000000, "/", "core.flyupweb.com.br", "1");
		setcookie("ckNM", "", time()-10000000, "/", "core.flyupweb.com.br", "1");
		setcookie("ckPW", "", time()-10000000, "/", "core.flyupweb.com.br", "1");
		setcookie("ckHS", "", time()-10000000, "/", "core.flyupweb.com.br", "1");
		setcookie("ckST", "", time()-10000000, "/", "core.flyupweb.com.br", "1");
		header('Location:index.php');
?>