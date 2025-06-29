<? include "../init/config.php";
$prod = @$_GET["prod"];

$produto = "";
if(!empty($prod)){
$sqlP = mysqli_query($db,"SELECT * FROM produto WHERE id_produto = '".$prod."'");
$produto = mysqli_fetch_array($sqlP);
if($produto["tipo"]){$tipo = $produto["tipo"];}else{$tipo = "M";}
$categoria = $produto['categoria'];
}
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
  <!-- overflow: hidden; -->
<? if(empty($produto)){?>

<? include "../includes/botoes.php";?>
    

    <div>
      <img src="imgs/banner-provador.jpg" class="img-responsive" alt="" style="margin: 0 auto;width: 100%;">
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script></script>

<? }else{ ?>

    <div class="row mt-4">
      <div class="col-md-5 col-sm-12" id="box-img">
        <img src="uploads/<?=$produto['imagem']?>" class="img-responsive" style="height:380px">
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="container">

          <div class="row">
            <div class="col">
              <h5>Preencha os dados para provar este produto</h5>
            </div>
          </div>
        
          <div class="row">
            <div class="col">
            <button class="btn-b <?=$tipo=="M" ? "btn-active" : ""?>" id="btnProdM">Masculino</button>
            </div>
            <div class="col">
            <button class="btn-b <?=$tipo=="F" ? "btn-active" : ""?>" id="btnProdF">Feminino</button>
            </div>
            <div class="col">
            </div>
          </div>

          <div class="row mt-3">
            <form>
              <div class="mb-2 col-3">
              <input type="hidden" name="prod" id="prod" value="<?=$prod?>">
              <input type="hidden" name="tipo" id="tipo" value="<?=$tipo?>">
                <label for="altura" class="form-label">Altura - cm</label>
                <input type="text" class="form-control form-control-sm" id="altura" name="altura">
              </div>

              <div class="mb-2 col-3">
                <label for="peso" class="form-label">Peso - kg</label>
                <input type="text" class="form-control form-control-sm" id="peso" name="peso">
              </div>

              <div class="mb-2 col-3">
                <label for="idade" class="form-label">Idade - anos</label>
                <input type="text" class="form-control form-control-sm" id="idade" name="idade" aria-describedby="emailHelp">
              </div>

            </form>
          </div>

          <footer class="sc-aXZVg BCkvI">
            <div class="btm-prox">
              <button type="button" class="btn btn-primary disabled" id="btn-proximo1">Proximo</button>
            </div>
          </footer>
          
        </div>
      </div>
    </div>


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
      if($("#idade").val().length > 1){$("#btn-proximo1").removeClass("disabled");
      }else{
        $("#btn-proximo1").addClass("disabled")
      }
    });

    $("#btn-proximo1").on("click", function() {
    var prod    = $("#prod").val();
    var tipo    = $("#tipo").val();
    var altura  = $("#altura").val();
    var peso    = $("#peso").val();
    var idade   = $("#idade").val();
      $("#corpo").load("ajax/medidas-produto.php?categoria=<?=$categoria?>&altura="+altura+"&peso="+peso+"&idade="+idade+"&prod="+prod+"&tipo="+tipo);
    });

    </script>
<? }?>

  </body>
</html>