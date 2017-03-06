<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Filtrado</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="stage">
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
</div>

    <?php

    //echo $_POST["conferencia"];

    include "dbnba.php";

    if (isset($_POST["local"])&&(!empty($_POST["local"]))) {
      $nba=new db();
      echo "<table border=1px";
        echo "<tr>";
            echo "<th>";
              echo "Local";
            echo "</th>";
          echo "<td>";
            echo "Puntos_Local";
          echo "</td>";
            echo "<th>";
              echo "Visitante";
            echo "</th>";
          echo "<td>";
            echo "Puntos_Visitante";
          echo "</td>";
            echo "<th>";
              echo "Temporada";
            echo "</th>";
        echo "</tr>";
      $equipo = $nba->devolverEquipos($_POST['local'],$_POST['visitante'],$_POST['temporada']);
      while ($fila = $equipo->fetch_assoc()){
        echo "<tr>";
          echo "<td class='primer'>";
            echo $_POST['local'];
          echo "</td>";
          echo "<td class='primero1'>";
            echo $fila['puntos_local'];
          echo "</td>";
          echo "<td  class='segundo'>";
            echo $_POST['visitante'];
          echo "</td>";
          echo "<td class='segundo2'>";
            echo $fila['puntos_visitante'];
          echo "</td>";
          echo "<td  class='tercero'>";
            echo $_POST['temporada'];
          echo "</td>";
        echo "</tr>";
      }
      echo "</table>";
    }else {
      ?>

      <a href="index.php"> NO ME HAS ENVIADO NADA </a>
      <?php
    }


     ?>

  </body>
</html>
