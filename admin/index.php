<?
require_once("../init/config.php");
include ("includes/header-defaut.php");
include ("func/class.php");
?>
  <body>
  <? include "includes/menu.php";?>
    <main>
      <div class="container mt-3 my-md-4 bd-layout">
        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">Inicial</h2>
          <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
              <h2 class="fw-bold text-body-emphasis">Seus produtos: <?=contar('produto')?></h2>
              <p class="text-body-secondary">Nesta sessão poderá gerir os produtos <br>pré vinculados ao provador virtual.</p>
              <a href="prod-list.php" class="btn btn-primary btn-lg">Gerir Produtos</a>
            </div>
            <div class="col">
              <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="col d-flex flex-column gap-2">
                  <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                  <i class="bi-collection" style="font-size: 2rem; color: white;"></i>
                  </div>
                  <h4 class="fw-semibold mb-0 text-body-emphasis">Tamanhos</h4>
                  <p class="text-body-secondary">Em tamanhos tratamos da nomenclatura que será utilizada para atribuição das medidas.</p>
                </div>

                <div class="col d-flex flex-column gap-2">
                  <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                  <i class="bi-globe" style="font-size: 2rem; color: white;"></i>
                  </div>
                  <h4 class="fw-semibold mb-0 text-body-emphasis">Categorias</h4>
                  <p class="text-body-secondary">São as categorias ou grupos de tipos de produtos.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <? include "includes/footer.php";?>   
      
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>