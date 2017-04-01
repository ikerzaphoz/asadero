<?php

Class Conf{

   private $_domain;
   private $_userdb;
   private $_passdb;
   private $_hostdb;
   private $_db;

   public function __construct(){
      require '../conn/config.php';
      $this->_domain=$domain;
      $this->_userdb=$user;
      $this->_passdb=$password;
      $this->_hostdb=$host;
      $this->_db=$db;
   }

   public function getUserDB(){
      $var=$this->_userdb;
      return $var;
   }

   public function getHostDB(){
      $var=$this->_hostdb;
      return $var;
   }

   public function getPassDB(){
      $var=$this->_passdb;
      return $var;
   }

   public function getDB(){
      $var=$this->_db;
      return $var;
   }

}

?>