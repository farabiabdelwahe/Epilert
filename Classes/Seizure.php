<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Seizure
 *
 * @author GSC
 */
 class Seizure {
    //put your code here
    var $id ;
    var $startsAt ; 
    var $endsAt; 
    var  $Date; 
    var $type; 
    var $lat ; 
    var $longi ; 
    
    function __construct() {
        
    }
    
    

    function getId() {
        return $this->id;
    }

    function getStartsAt() {
        return $this->startsAt;
    }

    function getEndsAt() {
        return $this->endsAt;
    }

    function getDate() {
        return $this->Date;
    }

    function getType() {
        return $this->type;
    }

    function getLat() {
        return $this->lat;
    }

    function getLongi() {
        return $this->longi;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setStartsAt($startsAt) {
        $this->startsAt = $startsAt;
    }

    function setEndsAt($endsAt) {
        $this->endsAt = $endsAt;
    }

    function setDate($Date) {
        $this->Date = $Date;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setLat($lat) {
        $this->lat = $lat;
    }

    function setLongi($longi) {
        $this->longi = $longi;
    }
    
    
    
}
