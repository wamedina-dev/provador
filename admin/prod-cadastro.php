<?
require_once("../init/config.php");
include ("includes/header-defaut.php");
include ("func/class.php");

?>
  <body>
    
  
  <? include "includes/menu.php";?>
  
    <main>
      <div class="container mt-3 my-md-4 bd-layout">
<? if(@$_GET['act']!="edit"){?>
        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">Cadastro de produtos</h2>
          <br><br><br>
          
          <form enctype="multipart/form-data" action="func/crud-prod.php?act=cadastro" method="POST" class="row g-3">
            <div class="col-lg-2 col-md-6">
              <label for="id_produto" class="form-label">ID Loja</label>
              <input type="text" class="form-control" id="id_produto" name="id_produto" value="">
            </div>
            <div class="col-lg-10 col-md-6">
              <label for="titulo" class="form-label">Título do produto</label>
              <input type="text" class="form-control" id="titulo" name="titulo" value="">
            </div>
            <div class="col-md-4">
              <label for="tabela" class="form-label">Tabela</label>
              <select id="tabela" name="tabela" class="form-select">
                <option selected value="">Selecione...</option>
                <?=utf8_encode(option_tabela())?>
              </select>
            </div>
            <div class="input-group mb-3 mt-5">
              <label class="input-group-text" for="userfile">Imagem</label>
              <input type="file" class="form-control" id="userfile" name="userfile">
            </div>
            <!-- <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div> -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        
        </div>
<? }else{?>

        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">Editar produto</h2>
          <br><br><br>
          <? $prod = get_produto($_GET['id']);?>
          <form enctype="multipart/form-data" action="func/crud-prod.php?act=editar" method="POST" class="row g-3">

            <div class="col-lg-2 col-md-6">
              <label for="id_produto" class="form-label">ID Loja</label>
              <input type="text" class="form-control" id="id_produto" name="id_produto" value="<?=$prod['id_produto']?>" disabled>
            </div>

            <div class="col-lg-10 col-md-6">
              <label for="titulo" class="form-label">Título do produto</label>
              <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$prod['nome']?>">
            </div>

            <div class="col-md-4">
              <label for="tabela" class="form-label">Tabela</label>
              <select id="tabela" name="tabela" class="form-select">
                <option selected value="">Selecione...</option>
                <?=utf8_encode(option_tabela())?>
              </select>
            </div>

            <div class="col-md-4">
              <label for="tabela" class="form-label">Imagem</label>
              <img src="../uploads/<?=$prod['imagem']?>" style="width:100px" alt="">
            </div>
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        
        </div>

<?}?>
      </div>

      
      <? include "includes/footer.php";?>   
      

      
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- <script src="js/main.js"></script> -->
    <script>
      // $('.dropdown-toggle').dropdown();
    </script>
  </body>
</html>