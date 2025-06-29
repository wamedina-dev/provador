    <div class="row mt-4">
      <div class="col-md-5 col-sm-12 text-center" id="box-img">
        <img src="imgs/medida-<?=$categ?>-<?=$_GET["tipo"]?>-01.jpg" class="img-responsive">
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
                <input type="hidden" name="tipo" id="tipo" value="<?=$_GET["tipo"]?>">
                <input type="hidden" name="altura" id="altura" value="<?=$_GET["altura"]?>">
                <input type="hidden" name="peso" id="peso" value="<?=$_GET["peso"]?>">
                <input type="hidden" name="idade" id="idade" value="<?=$_GET["idade"]?>">

              <div class="mb-2 col-3">
                <label for="med1" class="form-label">Altura - cm</label>
                <input type="text" class="form-control form-control-sm" id="med1" name="med1">
              </div>

              <div class="mb-2 col-3">
                <label for="med2" class="form-label">Gancho - cm</label>
                <input type="text" class="form-control form-control-sm" id="med2" name="med2">
              </div>

              <div class="mb-2 col-3">
                <label for="med3" class="form-label">Cintura - cm</label>
                <input type="text" class="form-control form-control-sm" id="med3" name="med3">
              </div>

              <input type="hidden" name="med4" id="med4" value="0">
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
  <script>
    
    
    $("#med1").on("keyup",function(){
      $(this).val(this.value.replace(/\D/g, ''));
      if($("#med1").val().length >= 3){$("#med2").focus();}
      if($("#med1").val().length > 0 && $("#med2").val().length > 0 && $("#med3").val().length > 0 && $("#med4").val().length > 0 && $("#med5").val().length > 0 && $("#med6").val().length > 0 && $("#med7").val().length > 0 && $("#med8").val().length > 0){
        $("#btn-proximo2").removeClass("disabled");
      }else{$("#btn-proximo2").addClass("disabled")}
    });
    $("#med1").on("focus",function(){
      $("#box-img").html('<img src="imgs/medida-<?=$categ?>-<?=$_GET["tipo"]?>-01.jpg" class="img-responsive">');
    });

    $("#med2").on("keyup",function(){
      $(this).val(this.value.replace(/\D/g, ''));
      if($("#med2").val().length >= 3){$("#med3").focus();}
      if($("#med1").val().length > 0 && $("#med2").val().length > 0 && $("#med3").val().length > 0 && $("#med4").val().length > 0 && $("#med5").val().length > 0 && $("#med6").val().length > 0 && $("#med7").val().length > 0 && $("#med8").val().length > 0){
          $("#btn-proximo2").removeClass("disabled");
        }else{$("#btn-proximo2").addClass("disabled")}
    });
    $("#med2").on("focus",function(){
      $("#box-img").html('<img src="imgs/medida-<?=$categ?>-<?=$_GET["tipo"]?>-02.jpg" class="img-responsive">');
    });

    $("#med3").on("keyup",function(){
      $(this).val(this.value.replace(/\D/g, ''));
      if($("#med1").val().length > 0 && $("#med2").val().length > 0 && $("#med3").val().length > 0 && $("#med4").val().length > 0 && $("#med5").val().length > 0 && $("#med6").val().length > 0 && $("#med7").val().length > 0 && $("#med8").val().length > 0){
          $("#btn-proximo2").removeClass("disabled");
        }else{$("#btn-proximo2").addClass("disabled")}
    });
    $("#med3").on("focus",function(){
      $("#box-img").html('<img src="imgs/medida-<?=$categ?>-<?=$_GET["tipo"]?>-03.jpg" class="img-responsive">');
    });

    $("#btn-proximo2").on("click", function() {
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
      $("#corpo").load("ajax/calculo-produto.php?categoria=<?=$_GET["categoria"]?>&prod=<?=$_GET["prod"]?>&altura="+altura+"&peso="+peso+"&idade="+idade+"&med1="+med1+"&med2="+med2+"&med3="+med3+"&med4="+med4+"&med5="+med5+"&med6="+med6+"&med7="+med7+"&med8="+med8+"&tipo="+tipo);
    });

  </script>