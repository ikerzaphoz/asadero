<?php

/* Clase encargada de gestionar las conexiones a la base de datos */
Class Db{

   private $servidor;
   private $usuario;
   private $password;
   private $base_datos;
   private $link;
   private $stmt;
   private $array;

   public function __construct(){
      $this->setConexion();
      $this->conectar();
   }

   public function setConexion(){
      $conf = new Conf();
      $this->servidor=$conf->getHostDB();
      $this->base_datos=$conf->getDB();
      $this->usuario=$conf->getUserDB();
      $this->password=$conf->getPassDB();
   }

   public function conectar(){
      $this->link=mysqli_connect($this->servidor, $this->usuario, $this->password);
      mysqli_select_db($this->link,$this->base_datos);
      mysqli_query($this->link, "SET NAMES 'utf8'");
   }

   public function ejecutar($sql){
      $this->stmt=mysqli_query($this->link,$sql);
      return $this->stmt;
   }

   public function obtener_fila($stmt,$fila){
      if ($fila==0){
         $this->array=mysqli_fetch_array($stmt);
      }else{
         mysqli_data_seek($stmt,$fila);
         $this->array=mysqli_fetch_array($stmt);
      }
      return $this->array;
   }

   public function lastID(){
      return mysqli_insert_id($this->link);
   }

}

?>