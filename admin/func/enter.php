<?
require ("../../init/config.php");
session_start();

date_default_timezone_set("Brazil/East");
$tempolimite = 20;

$login = isset($_POST["user"]) ? addslashes(trim($_POST["user"])) : FALSE;
$pass = isset($_POST["pass"]) ? md5(trim($_POST["pass"])) : FALSE;

if(!$login || !$pass){
    $mensagem = "Você deve digitar sua senha e login!<br>";
    header('Location:../login.php?msg='.$mensagem.'');
} else {

$SQL = "SELECT id, nome, login, pass, poder
        FROM dd_user
        WHERE login = '" . $login . "'";
$result_id = @mysqli_query($db, $SQL) or die("Erro no banco de dados!");
$total = @mysqli_num_rows($result_id);

if($total) {
    $dados = @mysqli_fetch_array($result_id);
	
if( session_id() == '' ) {  session_start();   }

if(!strcmp($pass, $dados["pass"]))    {

	
		$_SESSION["P345SS15"]   = "P3SS1";
		$_SESSION["u_id"]       = $dados["id"];
		$_SESSION["u_nome"]     = stripslashes($dados["nome"]);
		
		header('Location:../index.php?msg=logado');	
        
} else {
        $mensagem = "Senha inválida!<br>";
        header('Location:../login.php?msg='.$mensagem.'');
 }
} else {
    $mensagem = "Usuário inexistente!<br>";
    header('Location:../login.php?msg='.$mensagem.'');
 } 
 header('Location:../index.php?msg=logado');
}
?>