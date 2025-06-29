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
$categ    = $_GET["categ"];
$tipo     = $_GET["tipo"];

$btn      = 4;
include "../includes/botoes.php";?>

    <div class="row">
      <div class="col-md-5 col-sm-12 text-center" id="box-img">
        <img src="imgs/medida-<?=$categ?>-<?=$tipo?>-01.jpg" class="img-responsive">
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="container">

          <div class="row">
            <div class="col">
              <h4>Insira suas medidas</h4>
            </div>
          </div>
        
          <div class="row mt-1">
            <form>
              <div class="mb-2 col-3">
                <input type="hidden" name="tipo" id="tipo" value="<?=$tipo?>">
                <input type="hidden" name="altura" id="altura" value="<?=$_GET["altura"]?>">
                <input type="hidden" name="peso" id="peso" value="<?=$_GET["peso"]?>">
                <input type="hidden" name="idade" id="idade" value="<?=$_GET["idade"]?>">

                <label for="torax" class="form-label">Tórax - cm</label>
                <input type="text" class="form-control form-control-sm" id="med1" name="med1" value="<?=@$_GET["med1"]?>">
              </div>

              <div class="mb-2 col-3">
                <label for="cintura" class="form-label">Cintura - cm</label>
                <input type="text" class="form-control form-control-sm" id="med2" name="med2" value="<?=@$_GET["med2"]?>">
              </div>

              <div class="mb-2 col-3">
                <label for="braco" class="form-label">Braço - cm</label>
                <input type="text" class="form-control form-control-sm" id="med3" name="med3" value="<?=@$_GET["med3"]?>">
              </div>

              <div class="mb-2 col-3">
                <label for="comprimento" class="form-label">Comprimento - cm</label>
                <input type="text" class="form-control form-control-sm" id="med4" name="med4" value="<?=@$_GET["med4"]?>">
              </div>
              <input type="hidden" name="med5" id="med5" value="0">
              <input type="hidden" name="med6" id="med6" value="0">
              <input type="hidden" name="med7" id="med7" value="0">
              <input type="hidden" name="med8" id="med8" value="0">
            </form>
          </div>

          <footer class="sc-aXZVg BCkvI">
            <div class="btm-prox">
              <button type="button" class="btn btn-primary disabled" id="btn-proximo2">Calcular</button>
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
  <? $field = 4; include "../includes/script-medidas.php";?>

  </body>
</html>