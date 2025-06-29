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

$categ = $_GET['categ'];

$btn=6; include "../includes/botoes.php";
?>
  
    <div class="row">
      <div class="col-md-5 col-sm-12" id="box-img">
        <img src="imgs/foto-<?=$categ?>-MF.jpg" class="img-responsive" alt="">
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="container">

          <div class="row">
            <div class="col">
              <h4>Escolha um dos tipos</h4>
            </div>
          </div>
        
          <div class="row">
            <div class="col">
            <button class="btn-b btn-active" id="btnM">Masculino</button>
            </div>
            <div class="col">
            <button class="btn-b" id="btnF">Feminino</button>
            </div>
            <div class="col">
             
            </div>
          </div>

          <div class="row mt-3">
            <form>
              <div class="mb-2 col-3">
                <input type="hidden" name="tipo" id="tipo" value="<?=!empty($_GET["tipo"]) ? $_GET["tipo"] : "M";?>">
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
    $("#btnM").on("click", function() {
        $("#tipo").val("M");
        $("#btnM").addClass("btn-active");
        $("#btnF").removeClass("btn-active");
    });
    $("#btnF").on("click", function() {
        $("#tipo").val("F");
        $("#btnF").addClass("btn-active");
        $("#btnM").removeClass("btn-active");
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
        var tipo    = $("#tipo").val();
        var altura  = $("#altura").val();
        var peso    = $("#peso").val();
        var idade   = $("#idade").val();
        $("#corpo").load("ajax/medidas-<?=$categ?>.php?categ=<?=$categ?>&tipo="+tipo+"&altura="+altura+"&peso="+peso+"&idade="+idade);
    });
  </script>

  </body>
</html>