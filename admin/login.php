<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Provador Virtual</title>
    <meta name="pragma" content="no-cache" />
    <meta name="cache-control" content="Public" />
    <meta name="expires" content="0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body style="margin:0 auto; width:100%; max-width: 890px;">
  
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
        <?=@$_GET['msg']<>""? "<span style='color:red'>".@$_GET['msg']."</span>" : "";?>
          <h2>Provador Virtual</h2>
        </div>

        <!-- Login Form -->
        <form method="post" action="func/enter.php" class="login">
          <input type="text" id="user" class="fadeIn second" name="user" placeholder="login">
          <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <div class="copywrite text-center" style="color:#666">
            <small class="small">
              <script>document.write(new Date().getFullYear())</script> © 
              <span class="fw-bold">Provador Virtual.</span> 
              All Rights Reserved.<br>
              Design &amp; Develop by Wagner Medina
            </small>
          </div>
        </div>

      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <script>
      $("#corpo").load("ajax/init-geral.php?prod=<?=$_GET['prod']?>", function () {
            //alert("Load was performed.");
        });
    </script>
  </body>
</html>