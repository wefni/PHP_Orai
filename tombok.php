<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tömbök</title>
    <style>
    table, th, td {
      border: 1px solid black;
    }

    </style>
  </head>
  <body>
    <?php
    $nevek = array("Kovács", "Nagy","Kiss");
    $nevek[3]= "Szabó";

    echo "Tömbkezelés for ciklussal <br />";
    for ($i=0; $i < 4; $i++) {
      echo $i . " $nevek[$i] <br />";

    }

    $szamok = range(10,30,3);

    echo "Tömb kezelése foreach ciklussal<br />";
    foreach ($szamok as $x) {

      echo $x . " ";
    }

    echo "<br />";
    echo print_r($nevek);
    echo "<br />";
    echo var_dump($nevek);

    echo "<pre>";
    echo print_r($nevek);
    echo "</pre>";

    echo "Törlés a tömb elemei közül";
    unset($nevek[2]);
    echo "<pre>";
      print_r($nevek);
    echo "</pre>";

    echo "Asszociatív tömbök használata <br />";
    $jegyek = array("matek" => 5, "programozás" => 4, "tesi" => 5);
    $jegyek["webprogramozás"] = 5;

    echo "Értékek, kiíratása<br />";
    foreach ($jegyek as $ertek) {
      echo $ertek, "<br />";
    }

        echo "Kulcsok és értékek kiíratása <br />";
        foreach ($jegyek as $kulcs=>$ertek) {
          echo $kulcs,"=> ", $ertek, "<br />";
        }

      echo "Kiíratás print_r utasítással<br />";
      print_r($jegyek);

      echo "<br />Kiíratás var_dump utasítással";
      var_dump($jegyek);

      echo "<br />Kiíratás használhatóbb formátumban";
      echo "<pre>";
      print_r($jegyek);
      echo "</pre>";
      ?>
      <h1>Masik tömb</h1>
      <?php
      echo "Numerikusan indexelt megvalósítás<br />";
      echo "2. változat: tantárgyakat és neveket is tárolunk <br />";
      $osztalyzat = array(
        array("Név", "Matek", "Tesi","Info"),
        array("Nagy",5,4,3),
        array("Kovács", 4,5,2),
        array("Kiss",4,2,5)
      );
      ?>
      <table style="">
      <?php
      for ($i=0; $i < 4; $i++) {
        ?>
        <tr>
        <?php
        for ($j=0; $j < 4; $j++) {
          ?>
          <td><?php echo $osztalyzat[$i][$j], " ";?></td>
          <?php
        }?><tr>
          <?php
        echo "<br />";
      }

      echo "<pre>";
      print_r($osztalyzat);
      echo "</pre>";

    ?>

  </body>
</html>
