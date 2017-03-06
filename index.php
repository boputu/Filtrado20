<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <form class="" action="filtrado.php" method="post">
    <hr> <br> Equipo local:
    <?php
   include 'dbnba.php';
   $nbalocal=new db();
   $nba1ro=$nbalocal->devolverLocalVisitante();
      echo "<select name='local'>";
      echo "<option> Introduce un equipo </option>";
   while ($fila = $nba1ro->fetch_assoc()){
   echo "<option value='".$fila['Nombre']."'>".$fila['Nombre']."</option>";
   }
   echo "</select>"; echo "<br>"; echo "<br>";
     ?>
     <?php
     $nba1ro=$nbalocal->devolverLocalVisitante();
     echo "Equipo Visitante: ";
        echo "<select name='visitante'>";
        echo "<option> Introduce un equipo </option>";
     while ($fila = $nba1ro->fetch_assoc()){
     echo "<option value='".$fila['Nombre']."'>".$fila['Nombre']."</option>";
     }
     echo "</select>"; echo "<br>"; echo "<br>";

      ?>
      <?php
      $nbaTemporada=new db();
      $temporada=$nbaTemporada->devolverTemporada();
      echo "Temporada: ";
         echo "<select name='temporada'>";
        echo "<option> Introduce una temporada </option>";
      while ($fila = $temporada->fetch_assoc()){
      echo "<option value='".$fila['temporada']."'>".$fila['temporada']."</option>";
      }
      echo "</select>";
      echo "<br>";
      echo "<br>";

       ?>
      <input type="submit" name="" value="filtrar">
      <input type="reset" name="" value="borrar">
      <br> <br>
      <hr>
    </form>

  </body>
</html>
