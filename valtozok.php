<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $ar = 1500;
      echo $ar, "<br />";
      $nev = "Geza";
      echo $nev, "<br />";

      $ar = 100000;
      echo $ar, "<br />";

      unset($ar);
      echo $ar, " <br />";

      echo isset($ar), "<br />";
      echo isset($nev),"<br />";

      $atlag = 4.50;
      echo $atlag, "<br />";

      $logikai = true;
      echo $logikai, "<br />";

      $logikai = false;
      echo $logikai, "<br />";

      $hanyados = 2;
      echo $hanyados, "<br />";
      echo gettype($hanyados), "<br />";

      $hanyados = 1/4;
      echo $hanyados, "<br />";
      echo gettype($hanyados), "<br />";

      settype($hanyados, "int");
      echo $hanyados, "<br />";
      echo gettype($hanyados),"<br />";

      $Zalaegerszeg = 60000;
      $Keszthely = 32132121;
      $varosnev = "Zalaegerszeg";

      echo $$varosnev, "<br />";
      echo "$varosnev lakossága ${$varosnev}", "<br />";
      $varosnev = "Keszthely";
      echo $$varosnev, "<br />";
      echo "$varosnev lakossága ${$varosnev}","<br />";

      echo '$varosnev lakossaga ${$varosnev}',"<br />";
      define("NEV", "Gotomer Oszkar");
      echo NEV, '<br />';

    ?>

  </body>
</html>
