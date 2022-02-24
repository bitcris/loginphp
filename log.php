<?php
  
  ?>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Pages</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
      
  
      <div class="log">
      <h4>LOGIN</h4> 

      <form action="" method="post">
          Senha <br>
          <input type="password" name="key" id=""> <br><br>
          <button type="submit">LOGIN</button>
      </form>

      <?php
          $vkey = 9989;
          $_POST["key"];
          
          if($_POST["key"]==$vkey) {
              header("Location: data.php");
          }
  
    ?> 
      </div>  

  </body>
  </html>
