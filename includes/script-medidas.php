<script>
<? for ($i = 1; $i <= $field; $i++) {?>
    $("#med<?=$i?>").on("keyup",function(){
      $(this).val(this.value.replace(/\D/g, ''));
      if($("#med<?=$i?>").val().length >= 3){$("#med<?=$i+1?>").focus();}
      if($("#med1").val().length > 0 && $("#med2").val().length > 0 && $("#med3").val().length > 0 && $("#med4").val().length > 0 && $("#med5").val().length > 0 && $("#med6").val().length > 0 && $("#med7").val().length > 0 && $("#med8").val().length > 0){
          $("#btn-proximo2").removeClass("disabled");
        }else{$("#btn-proximo2").addClass("disabled")}
    });
    $("#med<?=$i?>").on("focus",function(){
      $("#box-img").html('<img src="imgs/medida-<?=$categ?>-<?=$_GET["tipo"]?>-0<?=$i?>.jpg" class="img-responsive">');
    });
<? }?>

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
        $("#corpo").load("ajax/calculo-<?=$categ?>.php?categ=<?=$categ?>&tipo="+tipo+"&altura="+altura+"&peso="+peso+"&idade="+idade+"&med1="+med1+"&med2="+med2+"&med3="+med3+"&med4="+med4+"&med5="+med5+"&med6="+med6+"&med7="+med7+"&med8="+med8);
    });
  </script>