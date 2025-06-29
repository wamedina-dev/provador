(function ($) {
    "use strict";
    $(document).ready(function () {

        $("#corpo2").load("ajax/medidas-masculino.php", function () {
            //alert("Load was performed.");
        });

    });

    $("#btn01").on("click", function() {
        $("#corpo").load("ajax/init-bone.php?categ=bone");
    });
    $("#btn02").on("click", function() {
        $("#corpo").load("ajax/init-chine.php?categ=chine");
    });
    $("#btn03").on("click", function() {
        $("#corpo").load("ajax/init-camis.php?categ=camis");
    });
    $("#btn04").on("click", function() {
        $("#corpo").load("ajax/init-agas.php?categ=agas");
    });
    $("#btn05").on("click", function() {
        $("#corpo").load("ajax/init-berm.php?categ=berm");
    });
    $("#btn06").on("click", function() {
        $("#corpo").load("ajax/init-calca.php?categ=calca");
    });
 
    
})(jQuery);