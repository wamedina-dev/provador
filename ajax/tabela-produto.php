<? include "../init/config.php";
$prod = @$_GET["prod"];
$table = @$_GET["table"];

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
$categ = $tabela['categoria'];
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

<? if(empty($produto)){?>
  <div class="row">
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
<? $m = 1;
while($medidas = mysqli_fetch_array($sqlMd)){ 
?>
                <tr>
                  <th><?=$medidas['nome']?></th>
<?    while($tamanhos = mysqli_fetch_array($sqlTm)){ ?>
                  <td><?=$medidas['medida'.$m.'']?></td>
<?    } ?>
                </tr>
<? } ?>
              </tbody>
            </table>
          </div>

          <footer class="sc-aXZVg BCkvI">
            <div class="btm-prox">
              <button type="button" class="btn btn-primary" id="btn-inicio">Inicio</button>
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
                <tr>
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
              <button type="button" class="btn btn-primary" id="btn-inicio">Inicio</button>
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
   

    $("#btnProdM").on("click", function() {
        $("#tipo").val("M");
        $("#btnProdM").addClass("btn-active");
        $("#btnProdF").removeClass("btn-active");
    });
    $("#btnProdF").on("click", function() {
        $("#tipo").val("F");
        $("#btnProdF").addClass("btn-active");
        $("#btnProdM").removeClass("btn-active");
    });
    $("#altura").on("keyup",function(){
      $(this).val(this.value.replace(/\D/g, ''));
      if($("#altura").val().length >= 3){$("#peso").focus();}
    });
    $("#peso").on("keyup",function(){
      $(this).val(this.value.replace(/\D/g, ''));
      if($("#peso").val().length >= 3){$("#idade").focus();}
    });
    $("#idade").on("keyup",function(){
      $(this).val(this.value.replace(/\D/g, ''));
      if($("#idade").val().length > 1){$("#btn-proximo1").removeClass("disabled");}
      else{$("#btn-proximo1").addClass("disabled")}
    });
    $("#btn-proximo1").on("click", function() {
    var prod    = $("#prod").val();
    var tipo    = $("#tipo").val();
    var altura = $("#altura").val();
    var peso = $("#peso").val();
    var idade = $("#idade").val();
      $("#corpo").load("ajax/medidas-produto.php?categoria=<?=$categoria?>&altura="+altura+"&peso="+peso+"&idade="+idade+"&prod="+prod+"&tipo="+tipo);
    });
    </script>


  </body>
</html>