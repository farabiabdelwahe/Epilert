<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnexionController
 *
 * @author GSC
 */
include '../Utils/config.php';
abstract class ConnexionController {
  private static $cnx; // could be an array for multiple connections
  final protected function getDBConnection() {
    if (!$this->cnx) {
    $c=new config();
    var_dump($c);
		$this->cnx=$c->connexion();
    }
    return $this->cnx;
  }

}


