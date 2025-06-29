<?
require_once("../init/config.php");
include ("includes/header-defaut.php");
include ("func/class.php");

?>
  <body>
    
  
  <? include "includes/menu.php";?>
  
    <main>
      <div class="container mt-3 my-md-4 bd-layout">
<? if(isset($_GET['msg'])){?>
        <div class="alert alert-<?=@$_GET['alert']?> alert-dismissible fade show" role="alert">
          <strong><?=@$_GET['msg']?></strong>.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<? }?>
        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">Listagem de produtos</h2>
<br><br><br>
          
          <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">id Loja</th>
              <th scope="col">Título</th>
              <th scope="col">Categoria</th>
              <th scope="col">Views</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?=monta_prod()?>
            
          </tbody>
          </table>
          
        
        </div>
      </div>

      
      <? include "includes/footer.php";?>   
      

      
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- <script src="js/main.js"></script> -->
    <script>
      function pergunta(){ 
        // retorna true se confirmado, ou false se cancelado
        return confirm('Tem certeza de excluir esse item?');
      }
    </script>
  </body>
</html>