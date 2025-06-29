<? include "../init/config.php";
$prod   = @$_GET["prod"];
$table  = @$_GET["table"];
$tipo   = @$_GET["tipo"];

$produto = "";
if(!empty($prod)){
$sqlP = mysqli_query($db,"SELECT * FROM produto WHERE id_produto = '".$prod."'");
$produto = mysqli_fetch_array($sqlP);
if($produto["tipo"]){$tipo = $produto["tipo"];}else{$tipo = "M";}
if($produto["tabela"]){$table = $produto["tabela"];}else{$table = $table;}
}
$sqlT = mysqli_query($db,"SELECT * FROM tabela WHERE id = '".$table."'");
$tabela = mysqli_fetch_array($sqlT);

$sqlMd = mysqli_query($db,"SELECT * FROM medida  WHERE id_tabela = '".$table."'");
$categ    = $tabela['categoria'];
$prodNome = $tabela['nome'];
?>

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

<? if(empty($produto)){
include "../includes/botoes.php";  
?>
  
  <div class="row">
      <div class="col-md-5 col-sm-12 text-center" id="box-img">
        <img src="imgs/medida-<?=$categ?>-<?=$tipo?>-01.jpg" class="img-responsive">
      </div>
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
      <div class="box-tab-fita row" id="fita-metrica">
        <div class="col-md-9 text-center">Imprima, recorte e monte sua fita métrica para conferir suas medidas<br>
        <a href="fita-metrica.pdf" target="_blank" class="btn btn-primary" id="print-fita">Imprimir</a>
        </div>
        <div class="col-md-3">
          <img src="imgs/fita-icon.png" style="width:40px; margin-left: 20px; margin-top: 15px" alt="">
        </div>
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="container">

          <div class="row">
            <div class="col">
              <h4>Tabela de medidas</h4>
              <div><?=$prodNome?> - <?=($tipo == "M")?"Masculino":"Feminino"?></div>
            </div>
          </div>
        
          <div class="row mt-1">
            <table>
              <thead>
                <tr>
                  <th>TAMANHOS</th>
<?
$sqlTm = mysqli_query($db,"SELECT * FROM tamanho ");
while($tamanhos = mysqli_fetch_array($sqlTm)){
?>
                  <th><?=$tamanhos['nome']?></th>
<? } ?>
                  
                </tr>
              </thead>
              <tbody>
<?
while($medidas = mysqli_fetch_array($sqlMd)){ 
  $m = 1;
?>
                <tr class="medidaNome" data-img="<?=$medidas['manequim']?>">
                  <th><?=$medidas['nome']?></th>
<?   $sqlTm = mysqli_query($db,"SELECT * FROM tamanho ");
 while($tamanhos = mysqli_fetch_array($sqlTm)){ ?>
                  <td><?=$medidas['medida'.$m.'']?></td>
<? $m++;   
    } ?>
                </tr>
<? } ?>
              </tbody>
            </table>
          </div>

          <footer class="sc-aXZVg BCkvI">
            <div class="btm-prox">
              <button type="button" class="btn btn-primary" id="btn-inicio">Voltar</button>
            </div>
          </footer>
          
        </div>
      </div>
    </div>

<? }else{ ?>

<div class="row mt-4">
      <div class="col-md-5 col-sm-12 text-center" id="box-img">
        <img src="imgs/medida-<?=$categ?>-<?=$tipo?>-01.jpg" class="img-responsive">
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="container">

          <div class="row">
            <div class="col">
              <h4>Tabela de medidas</h4>
              <div><?=$produto['nome']?></div>
            </div>
          </div>
        
          <div class="row mt-1">
            <table cellspacing="0" cellpadding="0" class="table-tabela">
              <thead>
                <tr>
                  <th>TAMANHOS</th>
<?
$sqlTm = mysqli_query($db,"SELECT * FROM tamanho ");
while($tamanho = mysqli_fetch_array($sqlTm)){
?>
                  <th><?=$tamanho['nome']?></th>
<? } ?>
                  
                </tr>
              </thead>
              <tbody>
<?
while($medidas = mysqli_fetch_array($sqlMd)){
  $m = 1;
?>
                <tr class="medidaNome" data-img="<?=$medidas['manequim']?>">
                  <th><?=$medidas['nome']?></th>
<?
$sqlTm = mysqli_query($db,"SELECT * FROM tamanho ");
    while($tamanhos = mysqli_fetch_array($sqlTm)){
?>
                  <td><?=$medidas['medida'.$m.'']?></td>
<?
$m++;
    }
?>
                </tr>
<? } ?>
              </tbody>
            </table>
          </div>

          <footer class="sc-aXZVg BCkvI">
            <div class="btm-prox">
              <button type="button" class="btn btn-primary" id="btn-inicio">Voltar</button>
            </div>
          </footer>
          
        </div>
      </div>
    </div>
<? }?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    $("#btn-inicio").on("click", function() {
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
        $("#corpo").load("ajax/calculo-<?=$categ?>.php?categ=<?=$categ?>&tipo="+tipo+"&altura="+altura+"&peso="+peso+"&idade="+idade+"&med1="+med1+"&med2="+med2+"&med3="+med3+"&med4="+med4+"&med5="+med5+"&med6="+med6+"&med7="+med7+"&med8="+med8);
    });

    $(".medidaNome").on("mouseover", function(){
      var img = $(this).attr("data-img");
      $("#box-img").html('<img src="imgs/'+img+'" class="img-responsive">');
    })
    $(".medidaNome").on("click", function(){
      var img = $(this).attr("data-img");
      $("#box-img").html('<img src="imgs/'+img+'" class="img-responsive">');
    })

    </script>


  </body>
</html>