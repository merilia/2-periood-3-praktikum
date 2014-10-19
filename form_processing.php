<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>2. periood 3. praktikum</title>  
  </head>
  <body>
    <?php
    print_r($_POST);
    ?>
    <?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    //echo "<br>";
    //echo "Tere, {$username}!" . "<br>" . "Teie parool on {$password}." . "<br>";
    //print_r($_POST);
    ?>
    <?php
      /*if (isset($_POST["username"])) {
        $username = $_POST["username"];
      } else {
        $username = "puudub";
      }*/
        /*if (isset($_POST["password"])) {
        $password = $_POST["password"];         
      } else {    
        $password = "puudub";
      }*/
    ?>
    <?php
      if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"]; 
          echo "Tere, {$username}!" . "<br>" . "Teie parool on {$password}." . "<br>";
      } else {
        $username = "puudub";
          echo "Kasutajanimi või parool on puudu.";
      }
    ?>
  </body>
</html>
