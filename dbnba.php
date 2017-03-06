<?php
/**
 * Permitir la conexion contra la base de datos
 */
class db
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  //Funciones para la devolucion de resultados
  public function devolverEquipos($local,$visitante,$temporada){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM partidos WHERE equipo_local='".$local."' AND equipo_visitante='".$visitante."' AND temporada='".$temporada."'");
      return $resultado;
    }else{
      return null;
    }
  }

  public function devolverLocalVisitante(){
    if($this->error==false){
      $resultado2 = $this->conexion->query("SELECT distinct(Nombre) FROM equipos");
      return $resultado2;
    }else{
      return null;
    }
  }

  public function devolverTemporada(){
    if($this->error==false){
      $resultado3 = $this->conexion->query("SELECT distinct(temporada) FROM partidos");
      return $resultado3;
    }else{
      return null;
    }
  }

}


 ?>
