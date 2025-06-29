<?php
if(isset($db)){require_once("../init/config.php");}


function monta_prod($str=NULL){
	global $db;
  $tabela="";
	$SQL = mysqli_query($db,"SELECT * FROM produto ");
	while($prod = mysqli_fetch_array($SQL)){
    $tipo = $prod['tipo'] == "M" ? "Masculino" : "Feminino";
    $tabela = $tabela.'<tr>
    <th scope="row" class="col-1">'.$prod['id_produto'].'</th>
    <td>'.$prod['nome'].'</td>
    <td class="col-2">'.$tipo.'</td>
    <td class="col-1">'.$prod['acessos'].'</td>
    <td class="col-1">
     <a href="http://localhost/provadorV1/?prod='.$prod['id_produto'].'" target="_blank"><i class="bi-eye" style="font-size: 18px; color: grey;"></i></a>
     <a href="prod-cadastro.php?act=edit&id='.$prod['id'].'"><i class="bi-pencil-square" style="font-size: 18px; color: cornflowerblue;margin-left: 6px;"></i></a>
     <a href="func/crud-prod.php?act=excluir&id='.$prod['id'].'" onclick="return pergunta();"><i class="bi-trash" style="font-size: 18px; color: red;margin-left: 15px;"></i></a>
    </td>
  </tr>';
  }

	return $tabela;

}

function option_tabela($str=NULL){
	global $db;
  $monta="";
	$SQL = mysqli_query($db,"SELECT * FROM tabela ");
	while($dado = mysqli_fetch_array($SQL)){
    $monta = $monta.'<option value="'.$dado['id'].'">'.$dado['nome'].' '.$dado['tipo'].'</option>';
  }

	return $monta;

}

function contar($str){
	global $db;
	$SQL = mysqli_query($db,"SELECT * FROM ".$str." ");
	$conta = mysqli_num_rows($SQL);

	return $conta;

}

function get_tabela($str){
	global $db;
	$SQL = mysqli_query($db,"SELECT * FROM tabela WHERE id = '".$str."' ");
	$dado = mysqli_fetch_array($SQL);

	return $dado;
}

function get_produto($str){
	global $db;
	$SQL = mysqli_query($db,"SELECT * FROM produto WHERE id = '".$str."' ");
	$dado = mysqli_fetch_array($SQL);

	return $dado;
}
