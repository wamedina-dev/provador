<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Provador Virtual</title>
    <meta name="pragma" content="no-cache" />
    <meta name="cache-control" content="Public" />
    <meta name="expires" content="0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">   
  </head>

  <body>
<?
include "../init/config.php";
$tipo           = $_GET["tipo"];
$categ          = $_GET["categ"];
$sqlT = mysqli_query($db,"SELECT * FROM tabela WHERE tipo = '".$tipo."' AND categoria = '".$categ."' ");
$tabela = mysqli_fetch_array($sqlT);
$table          = $tabela["id"];
$prod           = $_GET["prod"];
$altura         = $_GET["altura"];
$peso           = $_GET["peso"];
$idade          = $_GET["idade"];
$med[1]         = $_GET["med1"];
$med[2]         = $_GET["med2"];
$med[3]         = $_GET["med3"];
$med[4]         = $_GET["med4"];
$med[5]         = $_GET["med5"];
$med[6]         = $_GET["med6"];
$med[7]         = $_GET["med7"];
$med[8]         = $_GET["med8"];

$btn=3; include "../includes/botoes.php";

if(empty($_GET['tamanho'])){
  include "../includes/calc-camis.php";
}else{
  include "../includes/calc-camis-get.php";
}


$maior = $pNota; $tamanho = "P"; $nota['P'] = $pNota;
if($mNota > $maior){$maior = $mNota;$tamanho = "M";$nota['M'] = $mNota;}
if($gNota > $maior){$maior = $gNota;$tamanho = "G";$nota['G'] = $gNota;}
if($ggNota > $maior){$maior = $ggNota;$tamanho = "GG";$nota['GG'] = $ggNota;}
if($xgNota > $maior){$maior = $xgNota;$tamanho = "XG";$nota['XG'] = $xgNota;}


if(!empty($_GET['tamanho'])){$tamanho = $_GET['tamanho']; $maior = $nota[$tamanho];}

if($maior > 2 || isset($_GET['tamanho'])){
  if($tamanho == "P"){
    $dicas = '<li class="liDicas"><img src="imgs/fitas-calc/'.$p[1]['seloD1'].'" alt=""><b>'.$p[1]['msgD1'].'</b></li><li class="liDicas"><img src="imgs/fitas-calc/'.$p[2]['seloD1'].'" alt=""><b>'.$p[2]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$p[3]['seloD1'].'" alt=""><b>'.$p[3]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$p[4]['seloD1'].'" alt=""><b>'.$p[4]['msgD1'].'</b></li>';
  if($maior <= 3){$msg1 = "Não recomendado"; $selo = "selo-x.png";}
  elseif($maior > 3 && $maior <= 5){$msg1 = "Aconselhado"; $selo = "selo-o.png";}
  elseif($maior > 5 ){$msg1 = "Melhor opção"; $selo = "selo-v.png";}
    $guias = '<div style="position: absolute;top: 103px;left: 55px;"><img src="imgs/fitas-calc/'.$p[1]['guia'].'" alt=""></div><div style="position: absolute;top: 200px;left: 67px;"><img src="imgs/fitas-calc/'.$p[2]['guia'].'" alt=""></div><div style="position: absolute;top: 45px;left: 24px;"><img src="imgs/fitas-calc/'.$p[3]['guia'].'" alt=""></div><div style="position: absolute;top: 52px;left: 115px;"><img src="imgs/fitas-calc/'.$p[4]['guia'].'" alt=""></div>';
  }

  if($tamanho == "M"){
    $dicas = '<li class="liDicas"><img src="imgs/fitas-calc/'.$m[1]['seloD1'].'" alt=""><b>'.$m[1]['msgD1'].'</b></li><li class="liDicas"><img src="imgs/fitas-calc/'.$m[2]['seloD1'].'" alt=""><b>'.$m[2]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$m[3]['seloD1'].'" alt=""><b>'.$m[3]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$m[4]['seloD1'].'" alt=""><b>'.$m[4]['msgD1'].'</b></li>';
    if($maior <= 3){$msg1 = "Não recomendado"; $selo = "selo-x.png";}
    elseif($maior > 3 && $maior <= 5){$msg1 = "Aconselhado"; $selo = "selo-o.png";}
    elseif($maior > 5 ){$msg1 = "Melhor opção"; $selo = "selo-v.png";}
    $guias = '<div style="position: absolute;top: 103px;left: 55px;"><img src="imgs/fitas-calc/'.$m[1]['guia'].'" alt=""></div><div style="position: absolute;top: 200px;left: 67px;"><img src="imgs/fitas-calc/'.$m[2]['guia'].'" alt=""></div><div style="position: absolute;top: 45px;left: 24px;"><img src="imgs/fitas-calc/'.$m[3]['guia'].'" alt=""></div><div style="position: absolute;top: 52px;left: 115px;"><img src="imgs/fitas-calc/'.$m[4]['guia'].'" alt=""></div>';
  }

  if($tamanho == "G"){
    $dicas = '<li class="liDicas"><img src="imgs/fitas-calc/'.$g[1]['seloD1'].'" alt=""><b>'.$g[1]['msgD1'].'</b></li><li class="liDicas"><img src="imgs/fitas-calc/'.$g[2]['seloD1'].'" alt=""><b>'.$g[2]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$g[3]['seloD1'].'" alt=""><b>'.$g[3]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$g[4]['seloD1'].'" alt=""><b>'.$g[4]['msgD1'].'</b></li>';
    if($maior <= 3){$msg1 = "Não recomendado"; $selo = "selo-x.png";}
    elseif($maior > 3 && $maior <= 5){$msg1 = "Aconselhado"; $selo = "selo-o.png";}
    elseif($maior > 5 ){$msg1 = "Melhor opção"; $selo = "selo-v.png";}
    $guias = '<div style="position: absolute;top: 103px;left: 55px;"><img src="imgs/fitas-calc/'.$g[1]['guia'].'" alt=""></div><div style="position: absolute;top: 200px;left: 67px;"><img src="imgs/fitas-calc/'.$g[2]['guia'].'" alt=""></div><div style="position: absolute;top: 45px;left: 24px;"><img src="imgs/fitas-calc/'.$g[3]['guia'].'" alt=""></div><div style="position: absolute;top: 52px;left: 115px;"><img src="imgs/fitas-calc/'.$g[4]['guia'].'" alt=""></div>';
  }

  if($tamanho == "GG"){
    $dicas = '<li class="liDicas"><img src="imgs/fitas-calc/'.$gg[1]['seloD1'].'" alt=""><b>'.$gg[1]['msgD1'].'</b></li><li class="liDicas"><img src="imgs/fitas-calc/'.$gg[2]['seloD1'].'" alt=""><b>'.$gg[2]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$gg[3]['seloD1'].'" alt=""><b>'.$gg[3]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$gg[4]['seloD1'].'" alt=""><b>'.$gg[4]['msgD1'].'</b></li>';
    if($maior <= 3){$msg1 = "Não recomendado"; $selo = "selo-x.png";}
    elseif($maior > 3 && $maior <= 5){$msg1 = "Aconselhado"; $selo = "selo-o.png";}
    elseif($maior > 5 ){$msg1 = "Melhor opção"; $selo = "selo-v.png";}
    $guias = '<div style="position: absolute;top: 103px;left: 55px;"><img src="imgs/fitas-calc/'.$gg[1]['guia'].'" alt=""></div><div style="position: absolute;top: 200px;left: 67px;"><img src="imgs/fitas-calc/'.$gg[2]['guia'].'" alt=""></div><div style="position: absolute;top: 45px;left: 24px;"><img src="imgs/fitas-calc/'.$gg[3]['guia'].'" alt=""></div><div style="position: absolute;top: 52px;left: 115px;"><img src="imgs/fitas-calc/'.$gg[4]['guia'].'" alt=""></div>';
  }

  if($tamanho == "XG"){
    $dicas = '<li class="liDicas"><img src="imgs/fitas-calc/'.$xg[1]['seloD1'].'" alt=""><b>'.$xg[1]['msgD1'].'</b></li><li class="liDicas"><img src="imgs/fitas-calc/'.$xg[2]['seloD1'].'" alt=""><b>'.$xg[2]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$xg[3]['seloD1'].'" alt=""><b>'.$xg[3]['msgD1'].'</b></li> <li class="liDicas"><img src="imgs/fitas-calc/'.$xg[4]['seloD1'].'" alt=""><b>'.$xg[4]['msgD1'].'</b></li>';
    if($maior <= 3){$msg1 = "Não recomendado"; $selo = "selo-x.png";}
    elseif($maior > 3 && $maior <= 5){$msg1 = "Aconselhado"; $selo = "selo-o.png";}
    elseif($maior > 5 ){$msg1 = "Melhor opção"; $selo = "selo-v.png";}
    $guias = '<div style="position: absolute;top: 103px;left: 55px;"><img src="imgs/fitas-calc/'.$xg[1]['guia'].'" alt=""></div><div style="position: absolute;top: 200px;left: 67px;"><img src="imgs/fitas-calc/'.$xg[2]['guia'].'" alt=""></div><div style="position: absolute;top: 45px;left: 24px;"><img src="imgs/fitas-calc/'.$xg[3]['guia'].'" alt=""></div><div style="position: absolute;top: 52px;left: 115px;"><img src="imgs/fitas-calc/'.$xg[4]['guia'].'" alt=""></div>';
  }

?>
    <div class="row">
      <div class="col-md-5 col-sm-12 text-center" id="box-img">
        <img src="imgs/foto-<?=$categ?>-<?=$_GET["tipo"]?>.jpg" class="img-responsive">
          <input type="hidden" name="tipo" id="tipo" value="<?=$_GET["tipo"];?>">
          <input type="hidden" name="altura" id="altura" value="<?=$_GET["altura"]?>">
          <input type="hidden" name="peso" id="peso" value="<?=$_GET["peso"]?>">
          <input type="hidden" name="idade" id="idade" value="<?=$_GET["idade"]?>">
          <input type="hidden" name="med1" id="med1" value="<?=$_GET["med1"]?>">
          <input type="hidden" name="med2" id="med2" value="<?=$_GET["med2"]?>">
          <input type="hidden" name="med3" id="med3" value="<?=$_GET["med3"]?>">
          <input type="hidden" name="med4" id="med4" value="<?=$_GET["med4"]?>">
          <input type="hidden" name="med5" id="med5" value="<?=$_GET["med5"]?>">
          <input type="hidden" name="med6" id="med6" value="<?=$_GET["med6"]?>">
          <input type="hidden" name="med7" id="med7" value="<?=$_GET["med7"]?>">
          <input type="hidden" name="med8" id="med8" value="<?=$_GET["med8"]?>">
          <div class="box-tab-medidas" id="tabela-medidas">Tabela de medidas</div>
      </div>
      <div class="col-md-7 col-sm-12" style="background-image: url(imgs/calc-<?=$categ?>-<?=$_GET["tipo"]?>.jpg); background-position: center; background-repeat: no-repeat;">
        <div class="container">

          <div class="row">
            <div class="col">
              <h4><?=$msg1?></h4>
            </div>
          </div>

          <div class="row mt-1">
              <div class="col-3 text-center">
                <div>Tamanho</div>
                <div style="font-size:25px; position:relative;">
                  <div class="box-tamanho">
                    <legend style="font-size: 38px;" id="tamanhoL"><?=$tamanho?></legend>
                  </div>
                  <div style="position: absolute;top: -2px;left: 78px;z-index: 99;">
                  <img src="imgs/fitas-calc/<?=$selo?>" alt="">
                  </div>
                </div>
                <div class="box-editarMedidas">
                  <button type="button" class="editarMedidas" id="editarMedidas">Editar Medidas</button>
                </div>
              </div>
              <div class="col-6">
                <div style="position: relative; diplay:block; height:330px">
                  <?=$guias?>
                </div>
              </div>
              <div class="col-3">
                <ul class="ulDicas">
                 <?=$dicas?>
                </ul>
              </div>
          </div>

          <?include "../includes/footer-final.php";?>
          
        </div>
      </div>
    </div>
<? }else{?>
  <div class="row">
      <div class="col-md-5 col-sm-12 text-center" id="box-img">
        <img src="imgs/foto-<?=$categ?>-<?=$_GET["tipo"];?>.jpg" class="img-responsive">
          <input type="hidden" name="tipo" id="tipo" value="<?=$_GET["tipo"];?>">
          <input type="hidden" name="altura" id="altura" value="<?=$_GET["altura"]?>">
          <input type="hidden" name="peso" id="peso" value="<?=$_GET["peso"]?>">
          <input type="hidden" name="idade" id="idade" value="<?=$_GET["idade"]?>">
          <input type="hidden" name="med1" id="med1" value="<?=$_GET["med1"]?>">
          <input type="hidden" name="med2" id="med2" value="<?=$_GET["med2"]?>">
          <input type="hidden" name="med3" id="med3" value="<?=$_GET["med3"]?>">
          <input type="hidden" name="med4" id="med4" value="<?=$_GET["med4"]?>">
          <input type="hidden" name="med5" id="med5" value="<?=$_GET["med5"]?>">
          <input type="hidden" name="med6" id="med6" value="<?=$_GET["med6"]?>">
          <input type="hidden" name="med7" id="med7" value="<?=$_GET["med7"]?>">
          <input type="hidden" name="med8" id="med8" value="<?=$_GET["med8"]?>">
          <div class="box-tab-medidas" id="tabela-medidas">Tabela de medidas - <? print_r ($p);?></div>
      </div>
      <div class="col-md-7 col-sm-12 text-center">
        <div class="container">
          <h4>Desculpe!</h4>
          <p>Não foi possível calcular uma tamanho adequado.</p>
          <footer class="sc-aXZVg BCkvI">
            <div class="btm-prox">
              <button type="button" class="btn btn-primary" id="reset">Reiniciar</button>
            </div>
          </footer>
        </div>
      </div>

<? }?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    var tipo    = $("#tipo").val();
    var altura  = $("#altura").val();
    var peso    = $("#peso").val();
    var idade   = $("#idade").val();
    var med1    = $("#med1").val();
    var med2    = $("#med2").val();
    var med3    = $("#med3").val();
    var med4    = $("#med4").val();
    var med5    = $("#med5").val();
    var med6    = $("#med6").val();
    var med7    = $("#med7").val();
    var med8    = $("#med8").val();

    
    $("#editarMedidas").on("click", function() {
        $("#corpo").load("ajax/medidas-<?=$categ?>.php?categ=<?=$categ?>&altura="+altura+"&peso="+peso+"&idade="+idade+"&med1="+med1+"&med2="+med2+"&med3="+med3+"&med4="+med4+"&med5="+med5+"&med6="+med6+"&med7="+med7+"&med8="+med8+"&tipo="+tipo);
    });
    $(".lkTam").on("click", function() {
      var tam = $(this).attr('data-id');
        $("#corpo").load("ajax/calculo-<?=$categ?>.php?categ=<?=$categ?>&altura="+altura+"&peso="+peso+"&idade="+idade+"&med1="+med1+"&med2="+med2+"&med3="+med3+"&med4="+med4+"&med5="+med5+"&med6="+med6+"&med7="+med7+"&med8="+med8+"&tamanho="+tam+"&tipo="+tipo);
    });
    $("#reset").on("click", function() {
      $("#corpo").load("ajax/init-<?=$categ?>.php");
    });
    $("#tabela-medidas").on("click", function() {
      $("#corpo").load("ajax/tabela-medidas.php?table=<?=$table?>&categ=<?=$categ?>&tipo="+tipo);
    });
    
  </script>

  </body>
</html>
