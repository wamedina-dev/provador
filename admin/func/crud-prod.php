<?php
require_once("../../init/config.php");
//require_once ("/admin/func/class.php");

if($_GET['act']=="cadastro"){
  $SQL = mysqli_query($db,"SELECT * FROM produto WHERE id_produto = '".$_POST['id_produto']."'");
  $conta = mysqli_num_rows($SQL);
  
  if($conta <=0){
  
    $uploaddir = '../../uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
      $SQL = mysqli_query($db,"SELECT * FROM tabela WHERE id = '".$_POST['tabela']."' ");
      $tbl = mysqli_fetch_array($SQL);

      $sql = mysqli_query($db,"INSERT INTO produto (id_produto,nome,tipo,categoria,imagem,manequim,tabela,criado) VALUES ('".$_POST['id_produto']."','".$_POST['titulo']."','".$tbl['tipo']."','".$tbl['categoria']."','".$_FILES['userfile']['name']."','1','".$_POST['tabela']."',NOW())");

      header('Location:../prod-list.php?msg=Cadastro efetuado!&alert=success');

    } else {
      echo '<pre>';
      echo "ERRO! Não foi possivel enviar o arquivo.\n";
      echo 'Aqui está mais informações de debug:';
      print_r($_FILES);
      print "</pre>";
    }

  }else{
    header('Location:../prod-list.php?msg=Produto já cadastrado!&alert=warning');
  }

}elseif($_GET['act']=="excluir"){

  $SQL = mysqli_query($db,"SELECT * FROM produto WHERE id = '".$_GET['id']."'");
  $img = mysqli_fetch_array($SQL);
  $uploaddir = '../../uploads/';
  unlink($uploaddir . $img['imagem']);
  $SQL = mysqli_query($db,"DELETE FROM produto WHERE id = '".$_GET['id']."'");
  header('Location:../prod-list.php?msg=Produto Excluido!&alert=success');

}elseif($_GET['act']=="editar"){

 

}
